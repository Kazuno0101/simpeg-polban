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
        $data['pengajuan'] = PengajuanKenaikanJabatan::all();
        $data['dosen'] = Dosen::all();
        $data['unit_kerja'] = UnitKerja::all();

        return view('content.simpeg.mutasi.index', $data);
    }
}
