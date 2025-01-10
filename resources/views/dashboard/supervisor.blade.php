@extends('layouts.dashboard')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800">Dashboard {{ auth()->user()->name }}</h1>
    <p class="mt-2 text-gray-600">Selamat datang, {{ auth()->user()->name }}! Anda dapat melihat laporan transaksi dan performa toko.</p>

    <!-- Grafik Penjualan -->
    <div class="mt-6">
        <h2 class="text-xl font-semibold text-gray-700">Grafik Penjualan Bulanan</h2>
        <canvas id="salesChart" class="mt-4"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
            datasets: [{
                label: 'Penjualan',
                data: [120, 190, 300, 500, 200, 300],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
