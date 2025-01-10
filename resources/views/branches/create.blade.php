<!-- resources/views/branches/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Cabang Baru</h1>
    <form action="{{ route('branches.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Cabang</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection