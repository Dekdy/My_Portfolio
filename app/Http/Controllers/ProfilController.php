<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index(){
        $profils = Profil::all();
        return view('Layouts.Profils.Profil',compact('profils'));
    }
}
