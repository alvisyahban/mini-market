<!-- resources/views/transactiondetails/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Transaksi Detail Baru</h1>
    <form action="{{ route('transactiondetails.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="transaction_id">Tanggal Transaksi</label>
            <select name="transaction_id" id="transaction_id" class="form-control" required>
                @foreach ($transactions as $transaction)
                    <option value="{{ $transaction->id }}">{{ $transaction->transaction_date }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="product_id">Nama Produk</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('transactiondetails.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection