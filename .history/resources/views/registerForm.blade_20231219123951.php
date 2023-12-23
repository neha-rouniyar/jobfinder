@extends('welcome')
@section('content')

<h1>register form</h1>
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
            <textarea id="contact" name="contact" class="form-control" rows="3" required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>


@endsection