<!-- resources/views/transactions/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Transaksi</h1>
    <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="transaction_date">Tanggal Transaksi</label>
            <input type="date" name="transaction_date" id="transaction_date" class="form-control" value="{{ $transaction->transaction_date }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Jumlah</label>
            <input type="number" name="amount" id="amount" class="form-control" value="{{ $transaction->amount }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection