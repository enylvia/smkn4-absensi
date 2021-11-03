<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = [
        'mapel'
    ];
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function Attendances() { 
        return $this->hasMany(Attendance::class);
    }
}
