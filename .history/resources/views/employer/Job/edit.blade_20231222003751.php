@extends('admin.index')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Update Job</li>
          </ol>
        </nav>
      </div>
      <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Job</h5>
                {{-- @if (session('jobPosted'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('jobPosted')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                 
                @endif --}}
                <!-- Horizontal Form - Single Row with Two Columns -->
                <form action="{{route('admin.job.update',$jobData->id)}}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputNanme4" class="form-label">Job Title</label>
                        <input type="text" value="{{$jobData->title}}" name="title" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Required Experience</label>
                        <input type="text" value="{{$jobData->experience}}" name="experience" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Job Description</label>
                        <textarea class="form-control" value="{{$jobData->desc}}" name="desc" id="floatingTextarea" style="height: 100px;"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Company Location</label>
                        <input type="text" name="address" value="{{$jobData->desc}}" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Company Contact</label>
                        <input type="number" name="contact" value="{{$jobData->desc}}" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Salary</label>
                        <input type="text" name="salary" value="{{$jobData->desc}}" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Job Type</label>
                        <input type="text" name="jobType" value="{{$jobData->desc}}" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Deadline</label>
                        <input type="date" name="deadline" value="{{$jobData->desc}}" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Horizontal Form - Single Row with Two Columns -->
    
            </div>
        </div>
    </div>
    
  </main

@endsection