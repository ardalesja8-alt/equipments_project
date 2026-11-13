@extends('layout')

@section('content')
<div class="card p-4 mx-auto" style="max-width:600px;">
    <h3 class="fw-bold mb-1">Edit Service</h3>
    <p class="text-muted mb-4">Update: {{ $post->title }}</p>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Category</label>
            <select name="category" class="form-control" required>
                <option value="Tattoo Services" {{ $post->category == 'Tattoo Services' ? 'selected' : '' }}>Tattoo Services</option>
                <option value="Piercing" {{ $post->category == 'Piercing' ? 'selected' : '' }}>Piercing</option>
                <option value="Touch-Up" {{ $post->category == 'Touch-Up' ? 'selected' : '' }}>Touch-Up</option>
                <option value="Coffee" {{ $post->category == 'Coffee' ? 'selected' : '' }}>Coffee</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Content</label>
            <textarea name="content" class="form-control" rows="4" required>{{ $post->content }}</textarea>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-warning flex-fill fw-bold">Update Service</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary flex-fill">Cancel</a>
        </div>
    </form>
</div>
@endsection
