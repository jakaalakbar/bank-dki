<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama'];
    protected $table = 'pekerjaans';
    public $timestamps = false;

    public function rekening(): BelongsTo
    {
        return $this->belongsTo(Rekening::class, 'pekerjaan');
    }
}
