@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card for Products -->
        <div class="bg-white p-4 rounded-lg shadow-md dark:bg-gray-700">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Total Products</h3>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $totalProducts }}</p>
        </div>
        
        <!-- Card for Transactions -->
        <div class="bg-white p-4 rounded-lg shadow-md dark:bg-gray-700">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Total Transactions</h3>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $totalTransactions }}</p>
        </div>

        <!-- Additional Cards or Widgets -->
        <div class="bg-white p-4 rounded-lg shadow-md dark:bg-gray-700">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Other Info</h3>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">Content here</p>
        </div>
    </div>
@endsection
