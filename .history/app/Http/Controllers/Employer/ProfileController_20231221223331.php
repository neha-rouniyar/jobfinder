<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function myProfile(Request $request)
    {
        $user=Auth::user();
        return view('employer.myProfile');
    }
}
