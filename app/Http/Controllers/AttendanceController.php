<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function overview($id){
        $user  = User::findorFail($id);
        $kelas = $user->jurusans()->orderBy('kelas','asc')->get();
        return view ('attendance.overview')->with('kelas',$kelas);
    }
}
