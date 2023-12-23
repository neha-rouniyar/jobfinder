@extends('admin.index')
@section('content')
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
                    <span class="badge rounded-pill bg-primary">Regular</span>
                    <span class="badge rounded-pill bg-warning">Employer</span>
                </td>
                {{-- <td>Edit Delete</td> --}}
            </tbody>
            @endforeach
          </table>
          </div>
    
      </main>



@endsection