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

        <div class="card" id="div1">
            <h1>Job Detail</h1>
            <label for="">Job Title</label>
            </div>
    
      </main>



@endsection