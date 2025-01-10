<!-- resources/views/employees/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pegawai Baru</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Pegawai</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" name="position" id="position" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection