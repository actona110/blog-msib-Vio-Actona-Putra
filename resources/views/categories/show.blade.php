@extends('layouts.app')

@section('content')
<h2>{{ $category->name }}</h2>
<p>{{ $category->description }}</p>
<a href="{{ route('categories.index') }}">Back to Categories</a>
@endsection