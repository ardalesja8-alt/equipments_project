@extends('layout')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold m-0">All Services</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-tattoo btn-sm"><i class="bi bi-plus-lg"></i> Add New Service</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th style="width:60px;">ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Content</th>
                    <th style="width:230px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td class="fw-bold text-capitalize">{{ $post->title }}</td>
                    <td><span class="badge bg-dark">{{ $post->category }}</span></td>
                    <td class="text-muted">{{ Str::limit($post->content, 60) }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btn-sm"><i class="bi bi-eye"></i> View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this service?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center py-4">No services yet. Add one!</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection