<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ["tingkatan","sub","kelas"];

    public function Siswa() { 
        return $this->hasMany(Siswa::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function Attendances() { 
        return $this->hasMany(Attendance::class);
    }
}
