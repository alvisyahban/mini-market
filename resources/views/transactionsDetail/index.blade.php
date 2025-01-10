<!-- resources/views/transactiondetails/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Transaksi Detail</h1>
    <a href="{{ route('transactiondetails.create') }}" class="btn btn-primary mb-3">Tambah Transaksi Detail</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactionDetails as $transactionDetail)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transactionDetail->transaction->transaction_date }}</td>
                    <td>{{ $transactionDetail->product->name }}</td>
                    <td>{{ $transactionDetail->quantity }}</td>
                    <td>{{ $transactionDetail->price }}</td>
                    <td>
                        <a href="{{ route('transactiondetails.edit', $transactionDetail->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('transactiondetails.destroy', $transactionDetail->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi detail ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection