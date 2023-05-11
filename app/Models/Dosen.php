<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = ['nama', 'nip', 'nidn', 'unit_kerja_id', 'jabatan_fungsional_id', 'jabatan_struktural_id'];

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    }

    public function jabatanStruktural()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_struktural_id');
    }

    public function jabatanFungsional()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_fungsional_id');
    }
}
