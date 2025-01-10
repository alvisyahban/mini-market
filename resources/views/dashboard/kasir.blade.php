<!-- resources/views/dashboard/kasir.blade.php -->

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Kasir') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Selamat Datang, Kasir!</h3>
                    <p>Ini adalah halaman dashboard khusus untuk kasir.</p>

                    <!-- Tambahkan konten khusus kasir di sini -->
                    <ul>
                        <li><a href="{{ route('transactions.index') }}">Lihat Transaksi</a></li>
                        <li><a href="{{ route('products.index') }}">Kelola Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection