<!-- resources/views/transactiondetails/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Transaksi Detail</h1>
    <form action="{{ route('transactiondetails.update', $transactionDetail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="transaction_id">Tanggal Transaksi</label>
            <select name="transaction_id" id="transaction_id" class="form -control" required>
                @foreach ($transactions as $transaction)
                    <option value="{{ $transaction->id }}" {{ $transaction->id == $transactionDetail->transaction_id ? 'selected' : '' }}>{{ $transaction->transaction_date }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="product_id">Nama Produk</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ $product->id == $transactionDetail->product_id ? 'selected' : '' }}>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $transactionDetail->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $transactionDetail->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('transactiondetails.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection