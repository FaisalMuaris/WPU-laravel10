@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{!! $post->body !!}</p>


    <a href="/posts">Back to posts</a>
@endsection
