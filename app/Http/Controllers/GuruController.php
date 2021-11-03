<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function createview(){
        $jurusan = Jurusan::orderBy('tingkatan','asc')->get();
        $mapel = Mapel::orderBy('mapel','asc')->get();
        return view('guru.addguru')->with(['jurusan'=>$jurusan,'mapel'=>$mapel]);
    }   

    public function store(Request $request){
        $attr = $request->all();

        // dd($attr);
        $attr['password'] = bcrypt(request('password'));
        $guru = User::create($attr);

        //interaction to pivot
        $guru->jurusans()->attach(request('jurusan'));
        $guru->mapels()->attach(request('mapel'));

        return redirect()->back();
    }
}
