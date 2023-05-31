<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $fillable = [
        'matpel_id', 'wali_kelas', 'name',
    ];

    
    public function kelas(){
        return $this->belongsTo(kelas::class);
    }

    public function matapelajarans(){
        return $this->belongsTo(matapelajaran::class);
    }
}
