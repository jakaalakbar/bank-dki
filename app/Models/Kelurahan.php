<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama', 'kode_kecamatan'];
    protected $table = 'kelurahans';
    public $timestamps = false;
}
