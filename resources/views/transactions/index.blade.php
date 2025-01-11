@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-4xl font-semibold text-primary">Daftar Transaksi</h1>
        <a href="{{ route('transaction.create') }}" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded-lg">Tambah Transaksi</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-3 text-center">No</th>
                    <th class="border border-gray-300 px-4 py-3 text-center">Tanggal Transaksi</th>
                    <th class="border border-gray-300 px-4 py-3 text-center">Jumlah</th>
                    <th class="border border-gray-300 px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-3 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-3 text-center">{{ \Carbon\Carbon::parse($transaction->transaction_date)->format('d M Y') }}</td>
                        <td class="border border-gray-300 px-4 py-3 text-center">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                        <td class="border border-gray-300 px-4 py-3 text-center">
                            <a href="{{ route('transaction.edit', $transaction->id) }}" class="bg-blue-500 hover:bg-blue-400 text-white py-1 px-4 rounded-md text-sm">Edit</a>
                            <form action="{{ route('transaction.destroy', $transaction->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">
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
