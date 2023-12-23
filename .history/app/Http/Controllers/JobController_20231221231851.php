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
        $job->desc=$request->desc;
        $job->experience=$request->experience;
        $job->location=$request->address;
        $job->contact=$request->contact;
        $job->salary=$request->salary;
        $job->job_type=$request->jobType;
        $job->deadline=$request->deadline;
        $job->save();
        return back()->with('jobPosted','Job Added Successfully');

    }
    public function viewJobs(Request $request)
    {
        $jobs=Job::all();
        return view('employer.Job.view',compact('jobs'));
    }
}
