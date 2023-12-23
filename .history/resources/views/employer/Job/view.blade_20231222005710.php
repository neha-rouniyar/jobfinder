@extends('admin.index')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Jobs List</li>
          </ol>
        </nav>
      </div>
       @if (session('updatedJob'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('updatedJob')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                 
                @endif
      <div class="card" id="div1">
      <table class="table .table-borderless">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Job Title</th>
            <th scope="col-3">Description</th>
            <th scope="col">Experience</th>
            <th scope="col">Salary</th>
            <th scope="col">Job Type</th>
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
            <td>{{$data->desc}}</td>
            <td>{{$data->experience}}</td>
            <td>{{$data->salary}}</td>
            <td>{{$data->job_type}}</td>
            {{-- <td><button type="button" class="btn btn-danger rounded-pill" >{{$data->deadline}}</button></td> --}}
            <td>
                <a href="{{route('admin.job.edit',$data->id)}}"><button type="button" class="btn btn-warning rounded-pill" >Update</button></a>
                {{-- <button type="button" class="btn btn-info rounded-pill">Delete</button> --}}
                
            </td>
        </tbody>
        @endforeach
      </table>
      </div>
    </main>

@endsection
