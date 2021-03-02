<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
        <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
        {{-- Logout --}}
        <br>
        <a href="{{route('logout')}}" 
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
        </a>

        <form id="logout-form" style="display: none" action="{{ route('logout')}}" method="post">
          @csrf
        </form>
      @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif
      @endauth
    </div>
  @endif
  <h1>Hello!</h1>
</body>

</html>
