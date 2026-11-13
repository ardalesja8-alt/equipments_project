@extends('layout')

@section('content')
<div class="card p-4 mx-auto" style="max-width:600px;">
    <h3 class="fw-bold mb-1">Create New Service</h3>
    <p class="text-muted mb-4">Add new tattoo service / post</p>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Ex: coffee americano" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Category</label>
            <select name="category" class="form-control" required>
                <option value="">-- Select Category --</option>
                <option value="Tattoo Services">Tattoo Services</option>
                <option value="Piercing">Piercing</option>
                <option value="Touch-Up">Touch-Up</option>
                <option value="Coffee">Coffee</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Content</label>
            <textarea name="content" class="form-control" rows="4" placeholder="Ex: tattoo offerings description" required></textarea>
        </div>
        <div class="d-flex gap-2">
            <button class="btn btn-tattoo flex-fill">Save Service</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary flex-fill">Back</a>
        </div>
    </form>
</div>
@endsection