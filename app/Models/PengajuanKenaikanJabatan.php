<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanKenaikanJabatan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_kenaikan_jabatan';

    protected $fillable = ['dosen_id', 'jabatan_asal_id', 'jabatan_tujuan_id', 'tanggal_pengajuan', 'alasan', 'status', 'tanggal_validasi'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }

    public function jabatanAsal()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_asal_id');
    }

    public function jabatanTujuan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_tujuan_id');
    }
}
