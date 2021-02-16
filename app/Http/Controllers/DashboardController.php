<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPelatihan;
use App\Models\ProgramKerja;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard_data = [
            'anggota' => User::count(),
            'program_kerja' => ProgramKerja::count(),
            'kegiatan_pelatihan' => KegiatanPelatihan::count(),
        ];
        return view('dashboard', ['dashboard_data' => $dashboard_data]);
    }
}
