<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('Layouts.Project.Project', compact('projects'));
    }

    public function tambah(){
        return view('Layouts.Project.Tambah');
    }

    public function proses(Request $request){
        $error = [
            'judul_project.required'        => 'Judul Project tidak boleh kosong',
            'file.required'                 => 'Gambar tidak boleh kosong'
        ];

        $this->validate($request, [
			'judul_project' => 'required',
			'file' => 'required',
		],$error);

        $file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'img';
		$file->move($tujuan_upload,$nama_file);

        Project::create([
			'judul_project'       => $request->judul_project,
			'file'                => $nama_file,
		]);

        return redirect('/project');
    }
}
