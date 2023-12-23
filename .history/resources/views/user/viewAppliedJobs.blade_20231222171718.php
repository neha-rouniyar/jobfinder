@extends('admin.index')
@section('content')
<main id="main" class="main">
        <div class="pagetitle">
          <h1>{{Auth::user()->name}}</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item">View Applied Jobs</li>
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
            @php
                    $i=1;
                @endphp
            <tbody>
                @foreach ($job as $item)
                    
                <td>{{$i++}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->location}}</td>
                <td>{{$item->job_type}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->title}}</td>
            </tbody>
            @endforeach
           
          </table>
          </div>
    
      </main>



@endsection