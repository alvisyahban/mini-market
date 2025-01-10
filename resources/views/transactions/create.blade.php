@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Transaction</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="product_id">Product:</label>
            <select name="product_id" class="form-control" required>
                <option value="" disabled selected>Select Product</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }} (Stock: {{ $product->stock }})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" class="form-control" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
