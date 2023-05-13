<?php

namespace App\Http\Controllers\simpeg\dosen;

use App\Http\Controllers\Controller;
use App\Models\Dosen as ModelsDosen;
use App\Models\Jabatan;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class Dosen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['jabatan'] = Jabatan::all();
        $data['unit_kerja'] = UnitKerja::all();
        $data['dosen'] = ModelsDosen::all();

        return view('content.simpeg.dosen.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|unique:dosen',
            // nip is nullable but unique
            'nip' => 'nullable|unique:dosen',
            'unit_kerja_id' => 'required',
            'jabatan_fungsional_id' => 'required|exists:jabatan,id',
            'jabatan_struktural_id' => 'exists:jabatan,id',
        ]);

        // store
        ModelsDosen::create($request->all());

        // redirect
        return redirect()->route('simpeg-dosen')->with('success', 'Data dosen berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dosen = ModelsDosen::findOrFail($id);

        // validate
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'nidn' => 'required|unique:dosen,nidn,' . $dosen->id,
            'nip' => 'nullable|unique:dosen,nip,' . $dosen->id,
            'unit_kerja_id' => 'required',
            'jabatan_fungsional_id' => 'required|exists:jabatan,id',
            'jabatan_struktural_id' => 'exists:jabatan,id',
        ]);

        // update
        $dosen->email = $request->input('email');
        if($request->input('password')){
            $dosen->password = bcrypt($request->input('password'));
        }
        $dosen->nama = $request->input('nama');
        $dosen->nidn = $request->input('nidn');
        $dosen->nip = $request->input('nip');
        $dosen->unit_kerja_id = $request->input('unit_kerja_id');
        $dosen->jabatan_fungsional_id = $request->input('jabatan_fungsional_id');
        $dosen->jabatan_struktural_id = $request->input('jabatan_struktural_id');

        $dosen->save();

        // redirect
        return redirect()->route('simpeg-dosen')->with('success', 'Data dosen berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dosen = ModelsDosen::findOrFail($id);

        // delete
        $dosen->delete();

        // redirect
        return redirect()->route('simpeg-dosen')->with('success', 'Data dosen berhasil dihapus');
    }
}
