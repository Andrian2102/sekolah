<?php

namespace App\Models;

use App\Models\guru;
use Illuminate\Database\Eloquent\Model;

class matapelajaran extends Model
{
    protected $fillable = [
        'name',
    ];

    public function gurus(){
        return $this->hasOne(guru::class);
    }
}
