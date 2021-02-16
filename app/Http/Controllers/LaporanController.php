<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function programKerja()
    {
        $programs = ProgramKerja::all()->where('status', true);
        return view('laporan_program_kerja', ['programs' => $programs]);
    }
}