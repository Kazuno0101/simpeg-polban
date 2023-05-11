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
            'nip' => 'unique:dosen',
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
