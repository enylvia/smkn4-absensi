<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'user_id','jurusan_id','mapel_id','siswa_id','keterangan'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Jurusan(){
        return $this->belongsTo(Jurusan::class);
    }
    public function Mapel(){
        return $this->belongsTo(Mapel::class);
    }
    public function Siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
