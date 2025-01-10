<!-- resources/views/dashboard/gudang.blade.php -->

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Gudang') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Selamat Datang, Gudang!</h3>
                    <p>Ini adalah halaman dashboard khusus untuk gudang.</p>

                    <!-- Tambahkan konten khusus gudang di sini -->
                    <ul>
                        <li><a href="{{ route('products.index') }}">Kelola Produk</a></li>
                        <li><a href="{{ route('transactiondetails.index') }}">Lihat Transaksi Detail</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection