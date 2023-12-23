@extends('welcome')
@section('content')

<div class="container">
    <div class="card-body" style="margin-top: 4%">
        <div class="card bg-light text-dark" style="max-width: 400px; margin: auto;"> 
            <h1 class="card-header" style="text-align: center; margin-top: 3%">Login Form</h1>
            @if (session('login'))
            <div class="alert alert-warning alert-dismissible fade show " style="margin-top: 4%" role="alert">
                <p style="color: rgb(128, 17, 0)8, 28, 0)">{{session('login')}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if (session('status'))
            <div class="alert alert-warning alert-dismissible fade show " style="margin-top: 4%" role="alert">
                <p style="color: rgb(128, 17, 0)8, 28, 0)">{{session('status')}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if (session('fail'))
            <div class="alert alert-warning alert-dismissible fade show " style="margin-top: 4%" role="alert">
                <p style="color: rgb(128, 17, 0)8, 28, 0)">{{session('fail')}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <div class="card-body">
                <form action="{{route('login.submit')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
