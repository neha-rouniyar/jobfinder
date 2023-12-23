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
            <th scope="col">User's Name</th>
            <th scope="col">User's Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $data)
                
            <td>1</td>
            <td>{{$data->name}}</td>
            <td>1</td>
            <td>1</td>
            
        </tbody>
        @endforeach
      </table>
      </div>

  </main

@endsection