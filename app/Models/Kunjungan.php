<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';
    public $primaryKey = 'no_kunjungan';
    protected $guarded = [];
    public $timestamps = false;

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'sip_dokter', 'sip');
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien', 'id');
    }
}
