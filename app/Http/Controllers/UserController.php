<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use PDF;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function __invoke($id){
        $user = \App\User::find($id);
        $user = json_decode(json_encode($user));
        return view('user', ['users'=>$user], ['id'=>$id]);
    }
    public function User(){
        return view('User');
        }
    public function update($id, Request $request){
        $user = User::find($id);
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->kelas = $request->kelas;
        $user->bio = $request->bio;
        $user->save();
        return redirect('/user');
            }
}
