@extends('layouts.app')

@section('content')
<h2>Login</h2>
<form action="{{ route('login') }}" method="POST">
  @csrf
  <div>
    <label for="email">Email:</label>
    <input type="email" name="email" required autofocus>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
  </div>
  <div>
    <button type="submit">Login</button>
  </div>
  <div>
    <a href="{{ route('register') }}">Register</a>
  </div>
</form>
@endsection