@extends('admin.index')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">User's List</li>
          </ol>
        </nav>
      </div>
      <div class="card" id="div1">
      <table class="table .table-borderless">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Job Title</th>
            <th scope="col">Description</th>
            <th scope="col">Experience</th>
            <th scope="col">Salary</th>
            <th scope="col">Job Type</th>
            <th scope="col">Deadline</th>
          </tr>
        </thead>
        {{-- <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($users as $data)
            <td>{{$i++}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->contact}}</td>
            <td>{{$data->address}}</td>
            <td>
                @if ($data->usertype=='regular')
                <span class="badge rounded-pill bg-primary">Regular</span>
                @elseif ($data->usertype=='employer')
                <span class="badge rounded-pill bg-warning">Employer</span>
                @endif
            </td>
            <td>Edit Delete</td>
        </tbody>
        @endforeach --}}
      </table>
      </div>

  </main

@endsection