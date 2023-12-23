@extends('admin.index')
@section('content')
<main id="main" class="main">
        <div class="pagetitle">
          <h1>{{Auth::user()->name}}</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item">View Job Detail</li>
              {{-- <li class="breadcrumb-item active">Profile</li> --}}
            </ol>
          </nav>
        </div><!-- End Page Title -->

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View Job Detail</h5>
                    <!-- Horizontal Form - Single Row with Two Columns -->
                    <form action="" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputNanme4" class="form-label">Job Title</label>
                            <input type="text" name="title" value="{{$jobDetailData->title}}" disabled class="form-control" id="inputNanme4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Required Experience</label>
                            <input type="text" value="{{$jobDetailData->experience}}" disabled name="experience" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Job Description</label>
                            <textarea class="form-control"  disabled name="desc" id="floatingTextarea" style="height: 100px;">{{$jobDetailData->desc}}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Company Location</label>
                            <input type="text" name="address" disabled value="{{$jobDetailData->location}}" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Company Contact</label>
                            <input type="number" name="contact" disabled value="{{$jobDetailData->contact}}"  class="form-control" id="inputAddress">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Salary</label>
                            <input type="text" name="salary" disabled value="{{$jobDetailData->salary}}" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Job Type</label>
                            <input type="text" name="jobType" disabled value="{{$jobDetailData->job_type}}" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Deadline</label>
                            <input type="date" name="deadline" disabled value="{{$jobDetailData->deadline}}" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Upload a Cover Letter</label>
                            <input type="file" name="deadline"  class="form-control" id="inputAddress">
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- Horizontal Form - Single Row with Two Columns -->
        
                </div>
            </div>
        </div>
    
      </main>



@endsection