<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';

protected $fillable = [
    'spesialisasi',
    'jenis_kelamin',
    'id_dokter',
    'nama',
    'email',
    'no_tlp',
    'tanggal_lahir',
];
}
