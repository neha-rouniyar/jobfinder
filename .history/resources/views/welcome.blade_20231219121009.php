<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

<div class="registration-form">
    <h2>User Registration</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label>Role:</label>
            <input type="radio" id="jobSeeker" name="role" value="jobSeeker" checked>
            <label for="jobSeeker">Job Seeker</label>
            <input type="radio" id="employer" name="role" value="employer">
            <label for="employer">Employer</label>
        </div>

        <div class="form-group">
            <button type="submit">Register</button>
        </div>
    </form>
</div>

</body>
</html>
