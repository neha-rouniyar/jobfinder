@extends('admin.adminfiles.index')
@section('content')

@if (Auth::check() && Auth::user()->usertype == 'admin')

@endsection