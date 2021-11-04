<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function createview(){
        $jurusan = Jurusan::orderBy('tingkatan','asc')->get();
        $mapel = Mapel::orderBy('mapel','asc')->get();
        return view('guru.addguru')->with(['jurusan'=>$jurusan,'mapel'=>$mapel]);
    }   

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required'],
        ]);
        try {
            //code...
            $attr = $request->all();
            $attr['password'] = bcrypt(request('password'));
            $guru = User::create($attr);
            //interaction to pivot
            $guru->jurusans()->attach(request('jurusan'));
            $guru->mapels()->attach(request('mapel'));

            return redirect()->back()->with('success','Data Guru Berhasil ditambahkan');
        } catch (QueryException $e) {
            return redirect()->back()->with('error',$e->errorInfo);
            
        }
        
    }

    public function listguru(){
        $guru = Guru::orderBy('nama','asc');
        if(request('search')) {
            $guru->where('nama', 'LIKE', "%". request('search') ."%");
                //   ->orWhere('nipd','LIKE',"%".request('search') . "%");
        }
        return view("guru.listguru", ['guru' => $guru->simplePaginate(10)]);
    }
}
