<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ews extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'ews'; 
    protected $fillable = [
        'no_cm',
        'nama_pasien',
        'ruangan',
        'diagnosa',
        'skrining_ews',
        'keadaan',
        'ket',
        'skor'
    ];
}
