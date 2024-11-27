<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'pekerjaan', 'alamat', 'nominal_setor', 'status'];
    protected $table = 'rekenings';
}
