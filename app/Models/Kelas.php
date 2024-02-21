<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelass'; // Nama tabel dalam database
    protected $primaryKey = 'id_kelas'; // Nama kolom kunci utama (primary key)

    protected $fillable = [
        'nama_kelas',
        'kompetensi_keahlian',
    ];
}
