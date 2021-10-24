<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ["jurusan_id","nama","nipd","jk","nisn","tempat_lahir","tgl_lahir","agama","sakit","izin","alpha","hadir"];
    
    public function Jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
}
