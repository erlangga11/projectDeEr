<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensi;
use PDF;
use Illuminate\Support\Facades\Gate;

class AbsensiController extends Controller
{
    public function __invoke($NID){
        $absensi = \App\absensi::find($NID);
        $absensi = json_decode(json_encode($absensi));
        return view('Absensi', ['NID'=>$NID]);
    }
    public function Absensi($NID){
        $absensi = absensi::find($NID);
        return view('Absensi', ['NID'=>$NID]);
        }
}
