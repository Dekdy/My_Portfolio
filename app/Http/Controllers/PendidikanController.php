<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index(){
        $pendidikans = Pendidikan::all();
        return view('Layouts.Pendidikan.Pendidikan',compact('pendidikans'));
    }

    public function tambah(){
        return view('Layouts.Pendidikan.Tambah');
    }

    public function proses(Request $request){
        $error = [
                    'nama_pendidikan.required'        => 'Nama Pendidikan harus diisi',
                    'deskripsi.required'              => 'Deskripsi harus diisi',
                    'class.required'                  => 'Class harus diisi',
                    'tahun_pendidikan.required'       => 'Tahun Pendidikan harus diisi'
                ];
        $this->validate($request,[
            'nama_pendidikan'   =>'required',
            'deskripsi'         =>'required',
            'class'             =>'required',
            'tahun_pendidikan'  =>'required'
        ],$error);

        Pendidikan::create([
            'nama_pendidikan'           =>$request->nama_pendidikan,
            'deskripsi'                 =>$request->deskripsi,
            'class'                     =>$request->class,
            'tahun_pendidikan'          =>$request->tahun_pendidikan
        ]);

        return redirect('/pendidikan');
    }

    public function edit($id){
        $pendidikan =  Pendidikan::find($id);
        return view('Layouts.Pendidikan.Edit',compact('pendidikan'));
    }

    public function update($id, Request $request){
       

        $this->validate($request,[
            'nama_pendidikan'   => 'required',
            'deskripsi'         => 'required',
            'class'             => 'required',
            'tahun_pendidikan'  => 'required'
        ]);

        $pendidikan = Pendidikan::find($id);
        $pendidikan->nama_pendidikan    = $request->nama_pendidikan;
        $pendidikan->deskripsi          = $request->deskripsi;
        $pendidikan->class              = $request->class;
        $pendidikan->tahun_pendidikan   = $request->tahun_pendidikan;
        $pendidikan->save();

        return redirect('/pendidikan');

    }

    public function hapus($id){
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();
        return redirect('/pendidikan');
    }
}
