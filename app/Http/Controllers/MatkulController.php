<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mapel;
use PDF;
use Illuminate\Support\Facades\Gate;

class MatkulController extends Controller
{
    public function __invoke($id){
        $mapel = \App\mapel::find($id);
        $mapel = json_decode(json_encode($matkul));
        return view('Matkul', ['matkul'=>$mapel], ['id'=>$id]);
    }
    public function Matkul(){
        $mapel = mapel::all();
        return view('Matkul', ['mapel'=>$mapel]);
        }
    
}
