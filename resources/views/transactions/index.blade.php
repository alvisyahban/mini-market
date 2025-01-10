@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Transaction List</h1>
    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Add New Transaction</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaction->product->name }}</td>
                <td>{{ $transaction->quantity }}</td>
                <td>{{ $transaction->total_price }}</td>
                <td>{{ $transaction->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
