<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama', 'kode_kabupaten'];
    protected $table = 'kecamatans';
    public $timestamps = false;
}
