<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembayaran extends Model
{
    use HasFactory;

    protected $table = 'detail_pembayaran';
    protected $guarded = [];
    public $timestamps = false;

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran', 'id');
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class, 'id_stock', 'id');
    }
}
