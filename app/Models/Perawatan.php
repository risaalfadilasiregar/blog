<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    protected $table = "perawatans";
    protected $fillable = ['id','jenis_rawat'];
}
