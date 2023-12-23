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
            @foreach ($users as $data)
                
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            
            @endforeach
        </tbody>
      </table>
      </div>

  </main

@endsection