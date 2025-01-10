<!-- resources/views/transactions/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Transaksi Baru</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="transaction_date">Tanggal Transaksi</label>
            <input type="date" name="transaction_date" id="transaction_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="amount">Jumlah</label>
            <input type="number" name="amount" id="amount" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection