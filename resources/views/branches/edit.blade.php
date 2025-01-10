<!-- resources/views/branches/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Cabang</h1>
    <form action="{{ route('branches.update', $branch->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Cabang</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $branch->name }}" required>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $branch->address }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection