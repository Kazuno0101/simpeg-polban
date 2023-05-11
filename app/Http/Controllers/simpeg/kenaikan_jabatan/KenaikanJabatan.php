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
        $data['pengajuan'] = PengajuanKenaikanJabatan::all();
        $data['dosen'] = Dosen::all();
        $data['jabatan'] = Jabatan::all();

        return view('content.simpeg.kenaikan.index', $data);
    }    

    public function store(Request $request)
    {
        $request->validate([
            'dosen_id' => 'required',
            'jabatan_asal_id' => 'required',
            'jabatan_tujuan_id' => 'nullable',
            'alasan' => 'required',
        ]);
        
        //add data tanggal_pengajuan to request with date now
        $request->request->add(['tanggal_pengajuan' => date('Y-m-d')]);
        //add data status to request
        $request->request->add(['status' => 'pending']);

        // store
        PengajuanKenaikanJabatan::create($request->all());

        // redirect
        return redirect()->route('simpeg-kenaikan')->with('success', 'Data pengajuan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        //
        $pengajuan = PengajuanKenaikanJabatan::findOrFail($id);

        // validate
        $request->validate([
            'dosen_id' => 'required',
            'jabatan_asal_id' => 'required',
            'jabatan_tujuan_id' => 'nullable',
            'alasan' => 'required',
        ]);

        // update
        $pengajuan->update($request->all());

        // redirect
        return redirect()->route('simpeg-kenaikan')->with('success', 'Data pengajuan berhasil diubah');
    }

    public function destroy($id)
    {
        //
        $pengajuan = PengajuanKenaikanJabatan::findOrFail($id);

        // delete
        $pengajuan->delete();

        // redirect
        return redirect()->route('simpeg-kenaikan')->with('success', 'Data pengajuan berhasil dihapus');
    }
}
