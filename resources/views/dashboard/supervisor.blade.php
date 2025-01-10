<!-- resources/views/dashboard/supervisor.blade.php -->

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Supervisor') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Selamat Datang, Supervisor!</h3>
                    <p>Ini adalah halaman dashboard khusus untuk supervisor.</p>

                    <!-- Tambahkan konten khusus supervisor di sini -->
                    <ul>
                        <li><a href="{{ route('employees.index') }}">Kelola Pegawai</a></li>
                        <li><a href="{{ route('branches.index') }}">Kelola Cabang</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection