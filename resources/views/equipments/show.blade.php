@extends('equipments.layout')
@section('content')
<div class="card">
    <div class="card-header">Show Equipment</div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $equipment->name }}</p>
        <p><strong>Details:</strong> {{ $equipment->details }}</p>
        <p><strong>Quantity:</strong> {{ $equipment->quantity }}</p>
        <p><strong>Price:</strong> {{ $equipment->price }}</p>
        <a href="{{ route('equipments.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection