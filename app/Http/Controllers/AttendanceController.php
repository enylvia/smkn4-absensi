<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function overview($id){
        $user  = User::findorFail($id);
        $kelas = $user->jurusans()->orderBy('kelas','asc')->get();
        return view ('attendance.overview')->with('kelas',$kelas);
    }

    public function attend($id){
        $user_id =  Auth::user()->id;
        $user = User::findorFail($user_id);
        $mapel = $user->mapels()->orderBy('mapel','asc')->get();
        $siswa = Siswa::Where('jurusan_id',$id)->get();
        return view ('attendance.listsiswa')->with(['siswa'=>$siswa,'mapel'=>$mapel]);
    }

    //store attendance to user total
    public function storeattendance(Request $request){
        

        //mapping data to variable
        $hadir = $request->hadir;
        $sakit = $request->sakit;
        $izin = $request->izin;
        $alpa = $request->alpa;
        // dd($sakit);

        if ($hadir){
            foreach ($hadir as $data ) {
                $users = Siswa::find($data);
                $users->hadir +=1;
                $users->save();
            }
        }
        if($sakit){
            foreach ($sakit as $data ) {
                $users = Siswa::find($data);
                $users->sakit +=1;
                $users->save();
            }
    }
        if($izin){
            foreach ($izin as $data ) {
                $users = Siswa::find($data);
                $users->izin +=1;
                $users->save();
            }
        }
        if($alpa){
            foreach ($alpa as $data ) {
                $users = Siswa::find($data);
                $users->alpa +=1;
                $users->save();
            }
        }

    }
}
