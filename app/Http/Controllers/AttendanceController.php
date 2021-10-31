<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function overview($id){
        $user  = User::findorFail($id);
        $kelas = $user->jurusans()->orderBy('kelas','asc')->get();
        return view ('attendance.overview')->with('kelas',$kelas);
    }

    public function attend($id){
        $siswa = Siswa::Where('jurusan_id',$id)->get();
        return view ('attendance.listsiswa')->with('siswa',$siswa);
    }

    public function storeattendance(Request $request){

        $hadir = $request->hadir;

        if ($hadir){
            foreach ($hadir as $data ) {
                $users = Siswa::find($data);
                $users->hadir +=1;
                $users->save();
            }
        }
        // dd($hadir);
    }
}
