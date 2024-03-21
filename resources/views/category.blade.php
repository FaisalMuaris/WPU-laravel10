@extends('layouts.main')

@section('content')
    <h2 class="mb-5">Post Category : {{ $category }} </h2>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h3>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h3>
            <p>{{ $post->excerpt }}</p>
            <hr>
        </article>
    @endforeach
@endsection
