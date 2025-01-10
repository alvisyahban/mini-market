@extends('layouts.dashboard')

@section('title', 'Dashboard Gudang')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800">Dashboard {{ auth()->user()->name }}</h1>
    <p class="mt-2 text-gray-600">Selamat datang, Pegawai {{ auth()->user()->name }}! Anda dapat memeriksa stok barang</p>
    <a href="#" class="mt-4 inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Kelola Stok</a>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white p-4 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold text-gray-900">Total Stok</h3>
        <p class="text-2xl font-bold">500 Items</p>
    </div>
</div>
</div>


@endsection
