<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'dosen';

    protected $fillable = ['nama', 'email', 'password', 'nip', 'nidn', 'unit_kerja_id', 'jabatan_fungsional_id', 'jabatan_struktural_id'];

    protected $hidden = ['password'];

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
