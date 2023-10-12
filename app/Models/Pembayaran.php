<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $guarded = [];
    public $timestamps = false;

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class, 'no_kunjungan', 'no_kunjungan');
    }
}
