<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawais";
    protected $fillable = [
        'nama_pegawai',
        'alamat_pegawai',
        'no_telp',
        'email_pegawai'
    ];
}