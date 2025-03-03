<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_ews extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'ews'; 
    protected $fillable = [
        'no_cm',
        'nama_passien',
        'ruangan',
        'diagnosa',
        'skrining_ews',
        'keadaan',
        'ket',
        'skor'
    ];

    public $timestamps = false;
}
