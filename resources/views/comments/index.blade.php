<!-- resources/views/comments/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">{{ $post->title }}</h1>

    <div class="comments-section mb-5">
        <h3>Comments</h3>

        @foreach ($comments as $comment)
            <div class="comment my-3 p-3 border rounded">
                <h5>{{ $comment->author }}</h5>
                <p>{{ $comment->content }}</p>
                <small>{{ $comment->created_at->format('d M Y, H:i') }}</small>
            </div>
        @endforeach
    </div>

    <div class="add-comment-section">
        <h3>Add a Comment</h3>
        <form action="{{ route('comments.store', $post->id) }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="author">Name:</label>
                <input type="text" class="form-control" name="author" required>
            </div>

            <div class="form-group mb-3">
                <label for="content">Comment:</label>
                <textarea class="form-control" name="content" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
