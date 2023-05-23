<?php

namespace App\Http\Controllers\Simpeg;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\PengajuanKenaikanJabatan;
use Illuminate\Http\Request;

class KenaikanJafaController extends Controller
{
    //
    public function index()
    {
        $data['pengajuan'] = PengajuanKenaikanJabatan::all();
        $data['dosen'] = Dosen::all();
        $data['jabatan'] = Jabatan::where('tipe', 'fungsional')->get();

        return view('content.simpeg.kenaikan.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'dosen_id' => 'required',
            'jabatan_tujuan_id' => 'required',
            'alasan' => 'required',
        ]);
        //add data jabatan_asal_id to request
        $request->request->add(['jabatan_asal_id' =>
            Dosen::find($request->dosen_id)->jabatan_fungsional_id,
        ]);
        //add data tanggal_pengajuan to request with date now
        $request->request->add(['tanggal_pengajuan' => date('Y-m-d H:i:s')]);
        //add data status to request
        $request->request->add(['status' => 'pending']);

        // store
        PengajuanKenaikanJabatan::create($request->all());

        // redirect
        return redirect()->route('kenaikan')->with('success', 'Data pengajuan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        //
        $pengajuan = PengajuanKenaikanJabatan::findOrFail($id);

        // validate
        $request->validate([
            'dosen_id' => 'required',
            'jabatan_tujuan_id' => 'nullable',
            'alasan' => 'required',
        ]);

        $request->request->add(['jabatan_asal_id' => auth()->user()->dosen->jabatan_fungsional_id]);

        // update without events
        PengajuanKenaikanJabatan::withoutEvents(function () use ($request, $pengajuan) {
            $pengajuan->update($request->all());
        });

        // redirect
        return redirect()->route('kenaikan')->with('success', 'Data pengajuan berhasil diubah');
    }

    public function verifikasi(Request $request, $id)
    {
        //
        $pengajuan = PengajuanKenaikanJabatan::findOrFail($id);

        $request->validate([
            'status' => 'required',
        ]);

        //add data tanggal_verifikasi to request
        $request->request->add(['tanggal_verifikasi' => date('Y-m-d H:i:s')]);

        // update
        $pengajuan->update($request->all());

        // redirect
        return redirect()->route('kenaikan')->with('success', 'Data verifikasi berhasil diubah');
    }

    public function persetujuan(Request $request, $id)
    {
        //
        $pengajuan = PengajuanKenaikanJabatan::findOrFail($id);

        $request->validate([
            'status' => 'required',
        ]);

        $request->request->add(['tanggal_validasi' => date('Y-m-d H:i:s')]);

        // update
        $pengajuan->update($request->all());

        // redirect
        return redirect()->route('kenaikan')->with('success', 'Data persetujuan berhasil diubah');
    }

    public function destroy($id)
    {
        //
        $pengajuan = PengajuanKenaikanJabatan::findOrFail($id);

        // delete
        $pengajuan->delete();

        // redirect
        return redirect()->route('kenaikan')->with('success', 'Data pengajuan berhasil dihapus');
    }
}
