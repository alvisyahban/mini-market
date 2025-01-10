<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Arahkan ke dashboard berdasarkan role
        $user = Auth::user();

        if ($user->hasRole('Owner')) {
            return view('dashboard.admin'); // View untuk Owner
        } elseif ($user->hasRole('Supervisor')) {
            return view('dashboard.supervisor'); // View untuk Supervisor
        } elseif ($user->hasRole('Kasir')) {
            return view('dashboard.kasir'); // View untuk Kasir
        } elseif ($user->hasRole('Pegawai Gudang')) {
            return view('dashboard.gudang'); // View untuk Pegawai Gudang
        }

        return abort(403, 'Unauthorized'); // Jika role tidak cocok
    }
}
