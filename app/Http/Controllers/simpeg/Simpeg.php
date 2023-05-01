<?php

namespace App\Http\Controllers\simpeg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Simpeg extends Controller
{
    public function pensiun()
    {
        return view('content.simpeg.pensiun');
    }

    public function kenaikan()
    {
        return view('content.simpeg.kenaikan');
    }

    public function mutasi()
    {
        return view('content.simpeg.mutasi');
    }

    public function pemberhentian()
    {
        return view('content.simpeg.pemberhentian');
    }
}
