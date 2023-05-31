<?php

namespace App\Models;
use App\Models\guru;
use App\Models\siswa;
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
