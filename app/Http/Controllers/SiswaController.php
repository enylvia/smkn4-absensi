<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index () 
    {
        $siswa = Siswa::with('jurusan');
        if(request('search')) {
            $siswa->where('nama', 'LIKE', "%". request('search') ."%")
                  ->orWhere('nipd','LIKE',"%".request('search') . "%");
        }
        return view("siswa.listsiswa", ['siswa' => $siswa->simplePaginate(10)]);
    }
}
