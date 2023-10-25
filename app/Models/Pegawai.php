<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = [
            'nama', 
            'email',
            'no_tlp',
            'jabatan',
            'tanggal_lahir',
            'jenis_kelamin'
    ];
}
