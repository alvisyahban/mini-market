@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="min-h-screen bg-[#f5f5dc] p-8"> <!-- Background Cream dan padding halaman -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card for Products -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                <h3 class="text-2xl font-semibold text-blue-600">Total Products</h3>
                <p class="text-4xl font-bold text-gray-900 mt-2">{{ $totalProducts }}</p>
                <div class="mt-4">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">View Details</button>
                </div>
            </div>
            
            <!-- Card for Transactions -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                <h3 class="text-2xl font-semibold text-blue-600">Total Transactions</h3>
                <p class="text-4xl font-bold text-gray-900 mt-2">{{ $totalTransactions }}</p>
                <div class="mt-4">
                    <bu
