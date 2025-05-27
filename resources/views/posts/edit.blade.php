@extends('layout')

@section('content')
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')
        <input name="title" value="{{ $post->title }}" required><br>
        <textarea name="content" required>{{ $post->content }}</textarea><br>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('posts.index') }}">Back</a>
@endsection
