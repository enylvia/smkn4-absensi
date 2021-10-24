<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function overview(){
        return view ('attendance.overview');
    }
}
