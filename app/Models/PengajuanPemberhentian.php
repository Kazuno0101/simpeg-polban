<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanPemberhentian extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_pemberhentian';

    protected $fillable = ['dosen_id', 'tanggal_pengajuan', 'alasan', 'status', 'tanggal_validasi'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
