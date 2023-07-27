<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable =[
        'nim',
        'nama',
        'fakultas',
        'prodi',
        'no_telpon',
        'email',
        'dosen_wali',
    ];
}
