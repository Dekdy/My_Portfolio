<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('Login');
    }

    public function register(){
        return view('Register');
    }

    public function proses(Request $request){
        //validasi pengecekan
        if($request->password != $request->password){
            \Session::flash('error', 'password salah');

            return redirect('/register');
        }


        $data = [
            'nama'      =>$request->nama,
            'email'     =>$request->email,
            'password'  =>\Hash::make($request->password)
        ];

        //input data
        User::create($data);
        return redirect('/login');
    }

    public function prosesLogin(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user->id != null){
            if(\Hash::check($request->password,$user->password)){
                \Session::put('user',$user);
                return redirect('/dashboard');
            }else{
                \Session::flash('error','email atau password salah');

                return redirect('/login');
            }
        }else{
            \Session::flash('error','akun tidak ditemukan');

            return redirect('/login');
        }
    } 

    public function logout(){
        \Session::flush();

        return redirect('/login');
    }
}
