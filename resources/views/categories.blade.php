@extends('layouts.main')

@section('content')
    <h2 class="mb-5">Posts Category</h2>
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </h2>
            </li>
        </ul>
    @endforeach
@endsection
