<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MYController extends Controller
{
    //
    public function registration(Request $req){

        $req->validate([
            'name'=>'required|string',
            'email'=>'required',
            'password'=>'required|min:8'
        ]);

        $hash=Hash::make($req->password);
        $user=DB::select('INSERT INTO users ( name,email,password) VALUES (?,?,?)',[
            $req->name,
            $req->email,
            $hash

        ]);
        $message='Successfull';
        return view('register',compact('message'));



    }

    public function view(){
        return view('accessing_form');
    }
}
