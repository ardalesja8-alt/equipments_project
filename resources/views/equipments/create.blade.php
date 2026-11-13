@extends('equipments.layout')

@section('content')
<div class="card">
    <div class="card-header">Add New Equipment</div>
    <div class="card-body">
        <form action="{{ route('equipments.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Ex: Tattoo Machine">
            </div>
            <div class="mb-3">
                <label>Details</label>
                <textarea name="details" class="form-control" placeholder="Details"></textarea>
            </div>
            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
            <div class="mb-3">
                <label>Price</label>
                <input type="number" step="0.01" name="price" class="form-control" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('equipments.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection