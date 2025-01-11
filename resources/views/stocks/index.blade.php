@extends('layouts.dashboard')

@section('title', 'Stock Management')

@section('content')
<div class="flex justify-between mb-4">
    <h2 class="text-2xl font-semibold">Stock List</h2>
    <a href="{{ route('stocks.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg">Add New Stock</a>
</div>

<table class="w-full table-auto border-collapse border border-gray-300">
    <thead>
        <tr>
            <th class="border border-gray-300 px-4 py-2">Name</th>
            <th class="border border-gray-300 px-4 py-2">Quantity</th>
            <th class="border border-gray-300 px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stocks as $stock)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $stock->name }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $stock->quantity }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('stocks.edit', $stock->id) }}" class="text-blue-500">Edit</a> |
                    <form action="{{ route('stocks.destroy', $stock->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
