@extends('welcome')
@section('content')

<div class="container">
    <h1>Register form</h1>
    <div class="card-body">
        <form action="#" method="post" enctype="multipart/form-data">
            <!-- Full Name -->
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <!-- Profile Image -->
            <div class="form-group">
                <label for="profileImage">Profile Image:</label>
                <input type="file" id="profileImage" name="profileImage" class="form-control-file" accept="image/*">
            </div>

            <!-- Resume -->
            <div class="form-group">
                <label for="resume">Resume:</label>
                <input type="file" id="resume" name="resume" class="form-control-file" accept=".pdf,.doc,.docx">
            </div>

            <!-- Contact Information -->
            <div class="form-group">
                <label for="contact">Contact Information:</label>
                <input type="number" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fullName">Skills:</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required>
            </div>
            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
<script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</script>
@endsection