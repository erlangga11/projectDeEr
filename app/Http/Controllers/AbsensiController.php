<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensi;
use App\user;
use PDF;
use Illuminate\Support\Facades\Gate;

class AbsensiController extends Controller
{
    public function __invoke($NID){
        $absensi = \App\absensi::where(['NID'=>$NID])->first();
        $absensi = json_decode(json_encode($absensi));
        return view('Absensi', ['NID'=>$NID]);
    }
    public function Absensi($NID){
        $absensi = absensi::where(['NID'=>$NID])->first();
        return view('Absensi', ['absensi'=>$absensi] );
        }
}
