<?php

namespace App\Models;
use App\Models\kelas;
use App\Models\matapelajarans;
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
