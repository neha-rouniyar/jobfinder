@extends('admin.index')
@section('content')
<style>
  /* Add these styles to your CSS file or style tag */
.search-bar {
    margin-top: 20px; /* Adjust as needed */
    display: flex;
    justify-content: flex-end; /* Align to the right */
}

.search-form {
    background-color: #f8f9fa; /* Light background color */
    border: 1px solid #ced4da; /* Border color */
    border-radius: 5px; /* Rounded corners */
    padding: 5px; /* Adjust padding */
}

.search-form input {
    border: none; /* Remove input border */
    padding: 5px; /* Adjust input padding */
    max-width: 150px; /* Set a maximum width for the input */
}

.search-form button {
    background-color: #007bff; /* Button background color */
    color: #fff; /* Button text color */
    border: none; /* Remove button border */
    border-radius: 5px; /* Rounded corners */
    padding: 5px 10px; /* Adjust button padding */
    cursor: pointer; /* Add pointer cursor */
}

/* Hover effect for the button */
.search-form button:hover {
    background-color: #0056b3; /* Darker background color on hover */
}

</style>
<main id="main" class="main">
        <div class="pagetitle">
          <h1>{{Auth::user()->name}}</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item">View Jobs</li>
              
              {{-- <li class="breadcrumb-item active">Profile</li> --}}
            </ol>
          </nav>
        </div><!-- End Page Title -->
        
        @if (session('jobApplied'))
        <div class="alert alert-success alert-dismissible fade show " style="margin-top: 4%" role="alert">
            <p style="color: rgb(0, 0, 0)8, 28, 0)">{{session('jobApplied')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
          <div class="card" id="div1">
            
          <table class="table .table-borderless">
            <thead>
              <tr>
                <th scope="col">S.N</th>
                <th scope="col">Job Title</th>
                <th scope="col">Company Name</th>
                <th scope="col">Address</th>
                <th scope="col">JobType</th>
                <th scope="col">Deadline</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($jobs as $data)
                <td>{{$i++}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->location}}</td>
                <td>{{$data->job_type}}</td>
                <td><span class="badge rounded-pill bg-danger">{{$data->deadline}}</span></td>
                {{-- <td>Delete</td> --}}
                <td>
                    <a href="{{route('view.jobDetail',$data->id)}}"><button type="button" class="btn btn-info btn-sm">View Details</button></a>
                   <a href="{{route('view.jobDetail',$data->id)}}"><button type="button" class="btn btn-primary btn-sm">Apply Job</button></a>
                </td>
                {{-- <td>Edit Delete</td> --}}
            </tbody>
            @endforeach
          </table>
          </div>
    
      </main>



@endsection