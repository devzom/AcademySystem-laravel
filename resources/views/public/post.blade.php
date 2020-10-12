@extends('layout')
@section('content')
    <h1>Blog posts</h1>

    <h2>{{ $post->body}}</h2>
{{--    <h2>{{ $post->body ?? 'no entry in blogs'}}</h2>--}}
@endsection
