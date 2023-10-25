@extends('layouts/main')

@section('container')
    <h1 class="mb-5">{{ $post->post }}</h1>
    {!! $post->body !!}

    <a href="/blog">Back to Posts</a>
@endsection