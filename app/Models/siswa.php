<?php

namespace App;
use App\Models\kelas;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable = [
        'kelas_id', 'name', 'jurusan', 'foto'
    ];

    
    public function kelas(){
        return $this->belongsTo(kelas::class);
    }
}
