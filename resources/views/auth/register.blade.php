<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  <h1>Register</h1>
  <br>
  <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
  
  <form action="/register" method="post">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="password">
    <input type="password" name="password_confirmation" placeholder="Confirm Passowrd">

    <input type="submit">
  </form>
</body>
</html>