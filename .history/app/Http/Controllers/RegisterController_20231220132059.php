<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        // if ($file = $request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $filename = $file->getClientOriginalName();
        //     $imagepath = public_path() . '/images';
        //     $file->move($imagepath, $filename);
        //     // dd($room_data);

        //     $hostel = new Room();
        //     $hostel->hostel_id = $hostel_id;
        //     $hostel->seater = $rules['seater'];
        //     $hostel->seats_available = $rules['seater'];
        //     $hostel->image =  $filename;
        //     $hostel->room_description =  $request->room_description;
        //     $hostel->save();
        //     // return view('admin.rooms.rooms_form',compact('rooms_data'))->with('message','Room added Successfully');
        //     return back()->with('message', "Room added Successfully");
        // }


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
        $userData->save();

        $mediaType=new Media();
        $mediaType->user_id=$userData->id;
        $mediaType->profileImage=$request->profileImage;
        $mediaType->resume=$request->resume;
        $mediaType->save();
    }
    
}
