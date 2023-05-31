<?php

namespace App;

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
