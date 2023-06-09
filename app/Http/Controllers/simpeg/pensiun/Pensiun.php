<?php

namespace App\Http\Controllers\simpeg\pensiun;

use App\Models\PengajuanPensiun;
use App\Models\Dosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pensiun extends Controller
{
    public function index()
    {
        $data['pengajuan'] = PengajuanKenaikanJabatan::all();
        $data['dosen'] = Dosen::all();

        return view('content.simpeg.pensiun.index', $data);
    }
}
