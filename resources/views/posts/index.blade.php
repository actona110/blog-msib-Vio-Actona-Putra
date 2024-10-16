@extends('layouts.app')

@section('content')
<h2>Posts</h2>
<a href="{{ route('posts.create') }}">Add New Post</a>
<ul>
  @foreach ($posts as $post)
    <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
  @endforeach
</ul>
@endsection