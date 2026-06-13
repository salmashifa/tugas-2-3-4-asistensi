<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKelompok extends Model
{
    use HasFactory;

    protected $table = 'anggota_kelompoks';

    protected $fillable = [
        'kelompok_id',
        'nama',
        'nim',
        'email',
        'github',
        'foto',
        'peran',
    ];

    // Relasi ke kelompok
    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'kelompok_id');
    }

    // Helper: URL foto atau placeholder
    public function getFotoUrlAttribute(): string
    {
        if ($this->foto && file_exists(public_path('storage/' . $this->foto))) {
            return asset('storage/' . $this->foto);
        }
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->nama) . '&background=1d4ed8&color=fff&size=200';
    }
}