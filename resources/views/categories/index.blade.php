@extends('layouts.app')

@section('content')
<h2>Categories</h2>
<a href="{{ route('categories.create') }}">Add New Category</a>
<ul>
  @foreach ($categories as $category)
    <li><a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>
  @endforeach
</ul>
@endsection