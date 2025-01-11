@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-semibold text-primary">Daftar Pengguna</h1>
        <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded-md">Tambah Pengguna</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-3 text-center">No</th>
                    <th class="border border-gray-300 px-4 py-3 text-center">Nama Pengguna</th>
                    <th class="border border-gray-300 px-4 py-3 text-center">Email</th>
                    <th class="border border-gray-300 px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-3 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-3 text-center">{{ $user->name }}</td>
                        <td class="border border-gray-300 px-4 py-3 text-center">{{ $user->email }}</td>
                        <td class="border border-gray-300 px-4 py-3 text-center">
                            <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-500 hover:bg-blue-400 text-white py-1 px-4 rounded-md text-sm">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-400 text-white py-1 px-4 rounded-md text-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
