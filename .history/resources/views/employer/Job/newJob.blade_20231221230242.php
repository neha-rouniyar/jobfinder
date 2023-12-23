@extends('admin.index')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">New Job</li>
          </ol>
        </nav>
      </div>
      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Post a New Job</h5>
    
                <!-- Vertical Form - First Column -->
                <form class="row g-3">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Job Title</label>
                        <input type="text" name="title" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Job Description</label>
                        <textarea class="form-control" name="desc" id="floatingTextarea" style="height: 100px;"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Required Experience</label>
                        <input type="text" name="experience" class="form-control" id="inputPassword4">
                    </div>
                </form><!-- Vertical Form - First Column -->
            </div>
        </div>
    </div>
    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Vertical Form - Second Column -->
                <form class="row g-3">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Company Location</label>
                        <input type="text" name="address" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Company Contact</label>
                        <input type="number" name="contact" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Salary</label>
                        <input type="text" name="salary" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Job Type</label>
                        <input type="text" name="jobType" class="form-control" id="inputAddress">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="inputAddress">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form - Second Column -->
            </div>
        </div>
    </div>
    

  </main

@endsection