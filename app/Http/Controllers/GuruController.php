<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function createview(){
        $jurusan = Jurusan::orderBy('tingkatan','asc')->get();
        return view('guru.addguru')->with('jurusan',$jurusan);
    }   

    public function store(Request $request){
        $attr = $request->all();
        $attr['password'] = bcrypt(request('password'));
        $guru = User::create($attr);

        //interaction to pivot
        $guru->jurusans()->attach(request('jurusan'));

        return redirect()->back();
    }
}
