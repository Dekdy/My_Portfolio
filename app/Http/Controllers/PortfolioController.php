<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Skill;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index(){
        $Profils = Profil::all();
        $Skills = Skill::all();
        $Pendidikans = Pendidikan::all();
        $Pengalamans = Pengalaman::all();
        $Projects = Project::all();
        return view('Layouts.Frontend.My_Portfolio',compact('Skills','Profils','Pendidikans','Pengalamans','Projects'));
    }
}
