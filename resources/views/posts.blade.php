@extends('layouts.main')

@section('content')
    <h2 class="mb-5">Halaman Blog Posts </h2>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h3>
                <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
            </h3>
            <h4>by. {{ $post['author'] }}</h4>
            <p>{{ $post['body'] }}</p>
            <hr>
        </article>
    @endforeach
@endsection
