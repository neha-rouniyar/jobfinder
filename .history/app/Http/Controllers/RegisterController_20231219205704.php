<?php

namespace App\Http\Controllers;

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
            'email'=>'required|unique:users,column,except,id',
            'password'=>'required',
            'contact'=>'required',
            'skills'=>'required',
            'experience'=>'required',
            'resume'=>'required',
            'profileImage'=>'required'
        ]);
    }
    
}
