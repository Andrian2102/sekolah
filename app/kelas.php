<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $fillable = [
        'name',
    ];

    public function siswas(){
        return $this->hasMany(siswa::class);
    }

    public function gurus(){
        return $this->hasOne(guru::class);
    }
}
