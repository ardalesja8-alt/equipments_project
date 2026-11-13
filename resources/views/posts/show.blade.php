@extends('layout')

@section('content')
<div class="card p-5 mx-auto text-center" style="max-width:600px;">
    <div style="font-size:60px;">🎨</div>
    <span class="badge bg-dark mb-2" style="font-size:14px;">{{ $post->category }}</span>
    <h2 class="fw-bold text-capitalize">{{ $post->title }}</h2>
    <p class="text-muted mt-3">{{ $post->content }}</p>
    <small class="text-muted">Service ID: #{{ $post->id }}</small>

    <div class="d-flex gap-2 mt-4">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning flex-fill">Edit</a>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary flex-fill">Back to List</a>
    </div>
</div>
@endsection
Compose
