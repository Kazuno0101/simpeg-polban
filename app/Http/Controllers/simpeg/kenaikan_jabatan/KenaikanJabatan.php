<?php

namespace App\Http\Controllers\simpeg\kenaikan_jabatan;

use App\Models\PengajuanKenaikanJabatan;
use App\Models\Dosen;
use App\Models\Jabatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KenaikanJabatan extends Controller
{
    public function index()
    {
        $pengajuan = PengajuanKenaikanJabatan::all();
        $dosen = Dosen::all();
        $jabatan = Jabatan::all();
        return view('content.simpeg.kenaikan', compact('pengajuan', 'dosen','jabatan'));
    }    
}
