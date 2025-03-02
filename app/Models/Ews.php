<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ews extends Model
{
    use HasFactory;
    protected $table = 'ews'; 
    protected $fillable = [
        'id',
        'no_cm',
        'nama_passien',
        'ruangn',
        'diagnosa',
        'skrining_ews',
        'keadaan',
        'ket'
    ];
}
