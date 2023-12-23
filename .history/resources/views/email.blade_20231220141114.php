<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to Job Finder </h2>
{{-- @dd($datas) --}}
{{-- <p>Please Click on this link to verify your email</p> --}}
<p>Please click on the following link to verify your email:</p>
<a href="{{ route('verify.email', ['token' => $token]) }}">Verify Email</a>
</body>

</html>