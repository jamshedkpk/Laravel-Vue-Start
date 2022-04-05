<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
<div class="text-center">
<h2>Welcome To Homepage Of Laravel</h2>
@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
@auth
<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
@else
<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><h2>LogIn</h2></a>

@if (Route::has('register'))
<a href="{{ route('register') }}"
class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
<h2>Register</h2>
</a>
@endif
@endauth
</div>
@endif
</div>
<div id="app">
<hr>
<div class="text-center">
<router-link to="/"><h2>Home</h2></router-link>
<router-link to="/login"><h2>Login</h2></router-link>
<router-link to="/register"><h2>Register</h2></router-link>
<router-link to="/profile"><h2>Profile</h2></router-link>
<router-view></router-view>
</div>
<hr>
<Home/>
<hr>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
