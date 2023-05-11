<?php

namespace App\Http\Controllers\simpeg\pemberhentian;

use App\Models\PengajuanPemberhentian;
use App\Models\Dosen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pemberhentian extends Controller
{
    public function index()
    {
        $data['pengajuan'] = PengajuanKenaikanJabatan::all();
        $data['dosen'] = Dosen::all();

        return view('content.simpeg.pemberhentian.index', $data);
    }
}
