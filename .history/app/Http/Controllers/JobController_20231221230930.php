<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function newJob(Request $request)
    {
        return view('employer.Job.newJob');
    }
    public function newJobStore(Request $request)
    {
        $job=new Job();
        $job->company_id=Auth::user()->id;
        $job->title=$request->title;
        $job->desc=$request->title;
        $job->experience=$request->title;
        $job->location=$request->title;
        $job->contact=$request->title;
        $job->salary=$request->title;
        $job->job_type=$request->title;
        $job->job_type=$request->title;

    }
}
