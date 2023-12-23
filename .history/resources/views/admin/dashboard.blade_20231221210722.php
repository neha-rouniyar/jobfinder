@extends('admin.adminfiles.index')
@section('content')

@if (Auth::check() && Auth::user()->usertype == 'admin')
<h1>Hello Admin</h1>
      @if (Auth::check() && Auth::user()->usertype == 'admin')
      @elseif ()
@endsection