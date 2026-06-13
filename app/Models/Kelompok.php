<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelompok',
        'mata_kuliah',
        'dosen_pembimbing',
        'deskripsi',
        'status',
    ];

    // Relasi ke anggota
    public function anggota()
    {
        return $this->hasMany(AnggotaKelompok::class, 'kelompok_id');
    }

    // Scope untuk filter status
    public function scopeAktif($query)
    {
        return $query->where('status', 'aktif');
    }
}