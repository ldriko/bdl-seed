<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = [];
    public $timestamps = false;

    public function dokter()
    {
        return $this->hasOne(Dokter::class, 'id_user');
    }
}
