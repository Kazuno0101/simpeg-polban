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
        $pengajuan = PengajuanPemberhentian::all();
        $dosen = Dosen::all();
        return view('content.simpeg.pemberhentian', compact('pengajuan','dosen'));
    }
}
