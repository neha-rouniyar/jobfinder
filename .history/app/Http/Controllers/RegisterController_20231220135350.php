<?php

namespace App\Http\Controllers;

use App\Mail\EmailView;
use App\Models\EmailVerification;
use App\Models\Media;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function loginForm()
    {
        return view('loginForm');
    }
    public function registerForm()
    {
        return view('registerForm');
    }
    public function employerForm()
    {
        return view('employerForm');
    }
    public function userRegisterStore(Request $request)
    {

        $rules=$request->validate([
            'fullName'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'address'=>'required',
            'contact'=>'required|min:10|max:10',
            'skills'=>'required',
            'experience'=>'required',
            'degree'=>'required',
            'gYear'=>'required',
            'gpa'=>'required',
            'resume'=>'required|mimes:pdf',
            'profileImage'=>'required|mimes:jpeg,jpg'
        ]);
        $userData=new User();
        $userData->name=$rules['fullName'];
        $userData->email=$rules['email'];
        $userData->password=Hash::make($request->password);
        $userData->address=$rules['address'];
        $userData->contact=$rules['contact'];
        $userData->skills=$rules['skills'];
        $userData->experience=$rules['experience'];
        $userData->degree=$rules['degree'];
        $userData->gYear=$rules['gYear'];
        $userData->gpa=$rules['gpa'];
        $datas->token=$token;

        $userData->is_verified=0;
        $token=rand();
        $userEmail=$userData->email;
        Mail::to($userEmail)->send(new EmailView($token));
        $userData->save();

        $mediaType=new Media();
        $mediaType->user_id=$userData->id;
            $file = $request->file('profileImage');
            $filename = $file->getClientOriginalName();
            $imagepath = public_path() . '/images';
            $file->move($imagepath, $filename);
        $mediaType->profileImage=$filename;
        $resume = time().'.'.$request->resume->extension();  

        $request->resume->move(public_path('uploads'), $resume);
        $mediaType->resume=$resume;
        $mediaType->save();
        return back()->with('registerSuccess','User Registered Successfully. We have sent you an email');
    }
    public function verifyEmail(Request $request)
    {
        $token=$request->token;
        $userData=User::where('token',$token)->first();
        $emailVerificationData=EmailVerification::where('token',$token)->first();
        $time=Carbon::now();
        $currentTime=$time->toDateTimeString();
        if($userData->token == $emailVerificationData->token){
            if($emailVerificationData->expiry_at > $currentTime)
            {
                $userId=$userData->id;
                $userData=User::find($userId);
                $userData->status=1;
                $userData->save();
                return redirect('/login-form')->with('msgs','Please login to continue');
            }else{
                return redirect()->route('register.form')->with('linkExpiry','Your Link to email verification failed. Please Register Again');
            }
        }
    }
    
}
