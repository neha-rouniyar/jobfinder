@extends('admin.adminfiles.index')
@section('content')
{{-- <main id="main" class="main">
    <section class="section">
             @if (Auth::check() && Auth::user()->usertype == 'admin')
            <h1>Hello Admin</h1>
            @elseif (Auth::check() && Auth::user()->usertype == 'employer')
            <h1>Hello {{Auth::user()->name}}</h1>
            @endif
    </section>
    </main> --}}
    <div class="container">
        <h1>lkehdoi</h1>
    </div>
@endsection