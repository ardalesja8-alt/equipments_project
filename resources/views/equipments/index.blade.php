@extends('equipments.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">Equipments List</div>
            <div class="col-6 text-end">
                <a href="{{ route('equipments.create') }}" class="btn btn-success btn-sm">Add New</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th>Qty</th>
                <th>Price</th>
                <th width="220px">Action</th>
            </tr>
            @forelse($equipments as $index => $equipment)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $equipment->name }}</td>
                <td>{{ $equipment->details }}</td>
                <td>{{ $equipment->quantity }}</td>
                <td>{{ $equipment->price }}</td>
                <td>
                    <a href="{{ route('equipments.show', $equipment->id) }}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ route('equipments.edit', $equipment->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('equipments.destroy', $equipment->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="text-center">No equipments yet. Click Add New!</td></tr>
            @endforelse
        </table>
        {!! $equipments->links() !!}
    </div>
</div>
@endsection