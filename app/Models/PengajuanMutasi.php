<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanMutasi extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_mutasi';

    protected $fillable = ['dosen_id', 'unit_kerja_asal_id', 'unit_kerja_tujuan_id', 'tanggal_pengajuan', 'status', 'tanggal_validasi'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }

    public function unitKerjaAsal()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_asal_id');
    }

    public function unitKerjaTujuan()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_tujuan_id');
    }
}
