<?php

namespace App\Http\Controllers;

use App\Mail\EmailView;
use App\Models\EmailVerification;
use App\Models\Media;
use App\Models\Role;
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
        $userData->is_verified=0;
        $token=rand();
        $userData->token=$token;
        $userEmail=$userData->email;
        Mail::to($userEmail)->send(new EmailView($token));
        $regularUserRole = Role::where('name', 'user')->first();
        if ($regularUserRole) {
            $userData->roles()->attach($regularUserRole);
        }
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

        $emailVerification=new EmailVerification();

        $emailVerification->user_id=$userData->id;
        $emailVerification->token =$token;
            $current = Carbon::now();
            $tokenExpiry = $current->addHours(24);
            $emailVerification->expiry_at=$tokenExpiry;
            $emailVerification->save();
        return back()->with('registerSuccess','User Registered Successfully. We have sent you an email');
    }
    public function verifyEmail(Request $request)
    {
        $token=$request->token;
        $userData=User::where('token',$token)->first();
        // dd($userData);
        $emailVerificationData=EmailVerification::where('token',$token)->first();
        $time=Carbon::now();
        $currentTime=$time->toDateTimeString();
        if($userData->token == $emailVerificationData->token){
            if($emailVerificationData->expiry_at > $currentTime)
            {
                $userId=$userData->id;
                $userData=User::find($userId);
                $userData->is_verified=1;
                $userData->save();
                return redirect('/login-form')->with('login','Please login to continue');
            }else{
                return redirect()->route('register.form')->with('linkExpiry','Your Link to email verification failed. Please Register Again');
            }
        }
    }
    public function companyRegisterStore(Request $request)
    {
        $rules=$request->validate([
            'companyName'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'panNo'=>'required',
            'contact'=>'required|min:10|max:10',
            'address'=>'required',
            'companyDescription'=>'required'
        ]);
        $companyData=new User();
        $companyData->name=$rules['companyName'];
        $companyData->email=$rules['email'];
        $companyData->password=Hash::make($request->password);
        $companyData->pan_no=$rules['panNo'];
        $companyData->contact=$rules['contact'];
        $companyData->address=$rules['address'];
        $companyData->company_desc=$rules['companyDescription'];
        $companyData->is_verified=0;
        $token=rand();
        $companyData->token=$token;
        $companyEmail=$companyData->email;
        Mail::to($companyEmail)->send(new EmailView($token));
        $companyData->save();

        $emailVerification=new EmailVerification();

        $emailVerification->user_id=$companyData->id;
        $emailVerification->token =$token;
            $current = Carbon::now();
            $tokenExpiry = $current->addHours(24);
            $emailVerification->expiry_at=$tokenExpiry;
            $emailVerification->save();
        return back()->with('companyregisterSuccess','Company Registered Successfully. We have sent you an email');
    }
    public function loginAuthenticate(Request $request)
    {
        $data=$request->only('email','password');
        $userDetails=User::where('email',$request->email)->first();
        // dd($userDetails);
    }
    
}
