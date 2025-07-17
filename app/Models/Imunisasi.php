<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    protected $table = 'imunisasis'; 

    protected $fillable = [
        'nama_anak',
        'nik',
        'nama_orang_tua',
        'jenis_imunisasi',
        'tanggal',
    ];
}
