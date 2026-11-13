@extends('equipments.layout')
@section('content')
<div class="card">
    <div class="card-header">Edit Equipment</div>
    <div class="card-body">
        <form action="{{ route('equipments.update', $equipment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3"><label>Name</label><input type="text" name="name" value="{{ $equipment->name }}" class="form-control"></div>
            <div class="mb-3"><label>Details</label><textarea name="details" class="form-control">{{ $equipment->details }}</textarea></div>
            <div class="mb-3"><label>Quantity</label><input type="number" name="quantity" value="{{ $equipment->quantity }}" class="form-control"></div>
            <div class="mb-3"><label>Price</label><input type="number" step="0.01" name="price" value="{{ $equipment->price }}" class="form-control"></div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('equipments.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection