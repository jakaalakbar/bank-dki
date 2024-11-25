<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rekening extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table = 'rekenings';

    public function pekerjaan(): HasOne
    {
        return $this->hasOne(Pekerjaan::class);
    }
}
