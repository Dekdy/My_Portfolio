<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::all();
        return view('Layouts.Skills.Skill',compact('skills'));
    }

    public function tambah(){
        return view('Layouts.Skills.Tambah');
    }

    public function proses(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'icon'=>'required'
        ]);

        Skill::create([
            'nama'          =>$request->nama,
            'icon'          =>$request->icon
        ]);

        return redirect('/skill');
    }

    public function edit($id){
        $skill = Skill::find($id);
        return view('Layouts.Skills.Edit',compact('skill'));
    }

    public function update($id, Request $request){
        $error = [
            'nama.required'                 => 'Skill anda tidak boleh kosong',
            'icon.required'                 => 'Icon tidak boleh kosong',
        ];

        $this->validate($request,[
            'nama' => 'required',
            'icon' => 'required'
        ],$error);

        $skill = Skill::find($id);
        $skill->nama = $request->nama;
        $skill->icon = $request->icon;
        $skill->save();

        return redirect('/skill');
    }

    public function hapus($id){
        $skill = Skill::find($id);
        $skill->delete();

        return redirect('/skill');
    }
}
