@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Daftar Cabang</h1>
        <a href="{{ route('branch.create') }}" class="btn bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-400">Tambah Cabang</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-center text-gray-700 ">No</th>
                    <th class="px-6 py-3 text-center text-gray-700">Nama Cabang</th>
                    <th class="px-6 py-3 text-center text-gray-700">Alamat</th>
                    <th class="px-6 py-3 text-center text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $branch)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-center text-gray-600">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 text-center text-gray-800">{{ $branch->name }}</td>
                        <td class="px-6 py-4 text-center text-gray-600">{{ $branch->address }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('branch.edit', $branch->id) }}" class="text-yellow-500 hover:text-yellow-400">
                                <button class="btn btn-warning py-1 px-2 rounded-md text-white bg-yellow-500 hover:bg-yellow-400">Edit</button>
                            </a>
                            <form action="{{ route('branch.destroy', $branch->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-400 py-1 px-2 rounded-md" onclick="return confirm('Apakah Anda yakin ingin menghapus cabang ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
