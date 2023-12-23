<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $userData->name=$rules['fullName'];
        $userData->naaddressme=$rules['address'];
        $userData->contact=$rules['contact'];
        $userData->skills=$rules['skills'];
        $userData->experience=$rules['experience'];
        $userData->name=$rules['degree'];
        $userData->name=$rules['gYear'];
        $userData->name=$rules['gpa'];
    }
    
}
