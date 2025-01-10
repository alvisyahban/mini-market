@extends('layouts.dashboard')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800">Dashboard {{ auth()->user()->name }}</h1>
    <p class="mt-2 text-gray-600">Selamat datang, {{ auth()->user()->name }}! Anda dapat mengelola data pengguna, role, dan permission.</p>

    <!-- Tabel Data Pengguna -->
    <div class="mt-6 overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left text-gray-800">No</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-gray-800">Nama</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-gray-800">Email</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-gray-800">Role</th>
                    <th class="border border-gray-300 px-4 py-2 text-center text-gray-800">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data -->
                <tr>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                    <td class="border border-gray-300 px-4 py-2">John Doe</td>
                    <td class="border border-gray-300 px-4 py-2">john@example.com</td>
                    <td class="border border-gray-300 px-4 py-2">Admin</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <button class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                    </td>
                </tr>
                <!-- Tambahkan data lainnya -->
            </tbody>
        </table>
    </div>
</div>
@endsection
