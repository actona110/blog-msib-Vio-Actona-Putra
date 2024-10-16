@extends('layouts.app')

@section('content')
<h2>User Profile</h2>
<p>Name: {{ Auth::user()->name }}</p>
<p>Email: {{ Auth::user()->email }}</p>
<a href="{{ route('home') }}">Back to Home</a>
@endsection