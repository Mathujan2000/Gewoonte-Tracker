@extends('layout')

@section('content')
    <h1>Create Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input name="title" placeholder="Title" required><br>
        <textarea name="content" placeholder="Content" required></textarea><br>
        <button type="submit">Save</button>
    </form>

    <a href="{{ route('posts.index') }}">Back</a>
@endsection
