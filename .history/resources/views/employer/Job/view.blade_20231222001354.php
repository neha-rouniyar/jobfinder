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
            <td>{{$data->deadline}}</td>
            <td>
                <a href="#"><button type="button" class="btn btn-warning rounded-pill" data-bs-toggle="modal" data-bs-target="#largeModal" >Update</button></a>
                {{-- <button type="button" class="btn btn-info rounded-pill">Delete</button> --}}
                
            </td>
        </tbody>
        @endforeach
      </table>
      </div>
    </main>

@endsection
