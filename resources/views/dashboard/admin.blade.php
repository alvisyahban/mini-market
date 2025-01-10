<!-- resources/views/dashboard/admin.blade.php -->

@extends('layouts.dashboard') <!-- Jika Anda menggunakan layout -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Selamat Datang, Admin!</h3>
                    <p>Ini adalah halaman dashboard khusus untuk admin.</p>

                    <!-- Tambahkan konten khusus admin di sini -->
                    <ul>
                        <li><a href="{{ route('product.index') }}">Kelola Produk</a></li>
                        <li><a href="{{ route('users.index') }}">Kelola Pengguna</a></li>
                        <li><a href="{{ route('transaction.index') }}">Lihat Transaksi</a></li>
                        <li><a href="{{ route('transactionDetail.index') }}">Lihat Transaksi Detail</a></li>
                        <li><a href="{{ route('branch.index') }}">Kelola Cabang</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection