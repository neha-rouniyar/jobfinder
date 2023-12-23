@extends('welcome')
@section('content')

<div class="container">
    <div class="card-body">
        <h1 style="text-align: center; margin-top: 3%" >Register form</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <!-- First Column -->
                <div class="col-md-6">
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
                    <div class="form-group">
                        <label for="contact">Contact Information:</label>
                        <input type="number" id="contact" name="contact" class="form-control" required>
                    </div>
                    <!-- Profile Image -->
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="skills">Skills:</label>
                        <input type="text" id="skills" name="skills" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience:</label>
                        <select id="experience" name="experience" class="form-control" required>
                            <option value="" disabled selected>Select your experience</option>
                            <option value="Fresher">Fresher</option>
                            <option value="1-3 years">1-3 years</option>
                            <option value="4-6 years">4-6 years</option>
                            <option value="7+ years">7+ years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="resume">Resume:</label>
                        <input type="file" id="resume" name="resume" class="form-control-file" accept=".pdf,.doc,.docx">
                    </div>
                    <div class="form-group">
                        <label for="profileImage">Profile Image:</label>
                        <input type="file" id="profileImage" name="profileImage" class="form-control-file" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
