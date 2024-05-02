@extends('layouts.app')

@section('title')
    News
@endsection

@section('content')
    <h1>{{$data->summary}}</h1>
    <div class="alert alert-info">
        <p>{{ $data->short_description }}</p>
        <p>{{ $data->full_text }}</p>
    </div>
    <div class="container mt-4">
        <h2 class="mb-3">Comments</h2>
        <!-- Перебираємо всі коментарі та відображаємо їх -->
        @foreach ($data->comments as $comment)
            <div class="card mb-3">
                <div class="card-header">
                    <!-- Інформація про користувача та час коментаря -->
                    <strong>{{ $comment->user->email }}</strong>
                    <span class="text-muted ml-2">{{ $comment->created_at->format('d M Y, H:i') }}</span>
                </div>
                <div class="card-body">
                    <!-- Текст коментаря -->
                    <p>{{ $comment->comment }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <form action="{{ route('comments.store') }}" method="POST" id="commentForm">
        @csrf
        <input type="hidden" name="news_id" value="{{ $data->id }}">
        <!-- Додайте приховане поле для користувача -->
        <input type="hidden" name="user_id" value="{{ session('user_id') }}">

        <div class="row">
            <label for="comment" class="text-primary col-3">Comment:</label>
            <textarea name="comment" id="comment" cols="30" rows="10" class="border-primary col-8"></textarea>
            <button type="submit" class="btn btn-primary mt-3">Add Comment</button>
        </div>
    </form>
@endsection
