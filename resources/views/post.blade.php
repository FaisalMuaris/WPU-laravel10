@extends('layouts.main')

@section('content')
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>by. Faisal Muaris in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    <p>{!! $post->body !!}</p>


    <a href="/posts">Back to posts</a>
@endsection
