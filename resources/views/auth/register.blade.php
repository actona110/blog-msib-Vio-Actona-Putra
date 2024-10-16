@extends('layouts.app')

@section('content')
<h2>Register</h2>
<form action="{{ route('register') }}" method="POST">
  @csrf
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" required>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
  </div>
  <div>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required>
  </div>
  <div>
    <button type="submit">Register</button>
  </div>
  <div>
    <a href="{{ route('login') }}">Already have an account? Login</a>
  </div>
</form>
@endsection