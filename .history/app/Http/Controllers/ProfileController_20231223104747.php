<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User_job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function myProfile(Request $request)
    {
        $user=Auth::user();
        // dd($user);
        return view('employer.myProfile',compact('user'));
    }
    public function userProfile(Request $request)
    {
        $user=Auth::user();
        return view('user.myProfile',compact('user'));
    }
    public function viewJobDetail(Request $request)
    {
        $jobDetailData=Job::find($request->id);
        return view('user.viewJobDetail',compact('jobDetailData'));
    }
    public function viewAppliedJobs(Request $request)
    {
        $job=User_job::where('user_id',Auth::user()->id)->get();
        // dd($job);
        return view('user.viewAppliedJobs',compact('job'));
    }
    public function updateResume(Request $request)
    {
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

    }
}
