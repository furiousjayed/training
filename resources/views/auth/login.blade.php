<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  <h1>Login</h1>
  <br>
  <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
  <br>
  <form action="{{ route('login')}}" method="post">
    @csrf

    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="password">

    <input type="submit">
  </form>
  
  @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
    </div>
  @endif
  <a href="{{ route('password.request') }}">Resate Your Password</a>
</body>
</html>