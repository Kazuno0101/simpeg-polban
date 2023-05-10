<?php

namespace App\Http\Controllers\simpeg\mutasi;

use App\Models\PengajuanMutasi;
use App\Models\Dosen;
use App\Models\UnitKerja;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Mutasi extends Controller
{
    public function index()
    {
        $pengajuan = PengajuanMutasi::all();
        $dosen = Dosen::all();
        $unit_kerja = UnitKerja::all();
        return view('content.simpeg.mutasi', compact('pengajuan','dosen','unit_kerja'));
    }
}
