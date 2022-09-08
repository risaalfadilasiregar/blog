<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';
    protected $fillable = ['id','id_rawat','nama_pasien','alamat_pasien'];

    public function Perawatan()
    {
        return $this->belongsTo('App\Perawatan','id_rawat','id');
    }
}
