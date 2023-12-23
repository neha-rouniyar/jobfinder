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
      <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Complaint Description</th>
            <th scope="col">Registered Date</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @php
            $i=1;
          @endphp
            @foreach ($details as $data)
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$data->complaint_description}}</td>
            <td>{{$data->created_at}}</td>
            <td>
                {{-- <span class="badge rounded-pill text-bg-primary">Primary</span> --}}
    
                @if ($data->status==1)
                {{-- <a href="#" class="badge rounded-pill text-bg-success">Approved</a> --}}
                <a role="button" class="badge rounded-pill text-bg-success">Approved</a>
                @elseif ($data->status==2)
                <a role="button" class="badge rounded-pill text-bg-danger">Discarded</a>
                @else
                <a role="button" class="badge rounded-pill text-bg-warning">pending</a>
                @endif
    
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

  </main

@endsection