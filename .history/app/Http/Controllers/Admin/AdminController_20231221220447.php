<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function userList()
    {
        $users=User::all()->except();
        // dd($users);
        return view('admin.user.userList',compact('users'));
    }
}
