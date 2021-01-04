<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\mapel;
use PDF;

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
    public function getDownload($id){
        $u = \App\mapel::find($id);
        $file=storage_path() .'/storage/'."{{$u->file_materi}}";
        return Response::download($file);
    }
    public function upload($id, Request $request){
        $u = \App\mapel::find($id);
        if($u->file_materi && file_exists(storage_path('file_materi' . $u->file_materi)))
        { \Storage::delete('public/'.$u->file_materi);}
        $file_materi = $request->file('file_materi')->store('file_materi');
        $u->file_materi = $file_materi;
        $u->save();
        return redirect('/matkul');
    }
}
