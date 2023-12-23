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
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Usertype</th>
            <th scope="col">Action</th>
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
        </tbody> --}}
        {{-- @endforeach --}}
      </table>
      </div>

  </main

@endsection