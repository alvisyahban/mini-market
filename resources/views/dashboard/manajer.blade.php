<!-- resources/views/dashboard/manajer.blade.php -->

@extends('layouts.app') <!-- Jika Anda menggunakan layout -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Manajer') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Selamat Datang, Manajer!</h3>
                    <p>Ini adalah halaman dashboard khusus untuk manajer.</p>

                    <!-- Tambahkan konten khusus manajer di sini -->
                    <ul>
                        <li><a href="{{ route('products.index') }}">Kelola Produk</a></li>
                        <li><a href="{{ route('employees.index') }}">Kelola Karyawan</a></li>
                        <li><a href="{{ route('transactions.index') }}">Lihat Transaksi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection