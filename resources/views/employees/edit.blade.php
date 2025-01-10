<!-- resources/views/employees/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pegawai</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Pegawai</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}" required>
        </div>
        <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ $employee->position }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection