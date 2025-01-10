@extends('layouts.dashboard')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800">Dashboard Kasir</h1>
    <p class="mt-2 text-gray-600">Selamat datang, {{ auth()->user()->name }}! Anda dapat mengelola transaksi penjualan.</p>
    <a href="transactions.index" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Kelola Transaksi</a>
   
</div>
@endsection
