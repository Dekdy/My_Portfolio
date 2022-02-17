<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index(){
        $kontaks = Kontak::all();
        return view('Layouts.Kontak.Kontak',compact('kontaks'));
    }

    public function proses(Request $request){

        $error = [
            'username.required' => 'username field harus diisi*',
            'email.required' => 'email field harus diisi*',
            'komentar.required' => 'komentar field harus diisi*',
            'email.email' =>'Alamat email harus valid*'
        ];

        $this->validate($request,[
            'username'         =>'required',
            'email'            =>'required|email',
            'komentar'         =>'required'
        ],$error);

        Kontak::create([
            'username'                 =>$request->username,
            'email'                    =>$request->email,
            'komentar'                 =>$request->komentar
        ]);

        return redirect('/kontak');
    }
}
