@extends('layout')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create Post</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
