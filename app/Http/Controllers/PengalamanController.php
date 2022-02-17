<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalaman;

class PengalamanController extends Controller
{
    public function index(){
        $pengalamans = Pengalaman::all();
        return view('Layouts.Pengalaman.Pengalaman',compact('pengalamans'));
    }

    public function tambah(){
        return view('Layouts.Pengalaman.Tambah');
    }

    public function proses(Request $request){
        $error = [
            'nama_perusahaan.required'        => 'Nama Perusahaan tidak boleh kosong',
            'posisi.required'                 => 'Posisi tidak boleh kosong',
            'deskripsi.required'              => 'Deskripsi tidak boleh kosong',
            'lama_pengalaman.required'        => 'Lama Pengalaman tidak boleh kosong'
        ];

        $this->validate($request,[
            'nama_perusahaan'   =>'required',
            'posisi'            =>'required',
            'deskripsi'         =>'required',
            'lama_pengalaman'   =>'required'
        ],$error);

        Pengalaman::create([
            'nama_perusahaan'           =>$request->nama_perusahaan,
            'posisi'                    =>$request->posisi,
            'deskripsi'                 =>$request->deskripsi,
            'lama_pengalaman'           =>$request->lama_pengalaman
        ]);

        return redirect('/pengalaman');
    }

    public function edit($id){
        $pengalaman = Pengalaman::find($id);
        return view('Layouts.Pengalaman.Edit',compact('pengalaman'));
    }

    public function update($id,Request $request){
        $this->validate($request,[
            'nama_perusahaan'       => 'required',
            'posisi'                => 'required',
            'lama_pengalaman'       => 'required', 
            'deskripsi'             => 'required' 
        ]);

        $pengalaman = Pengalaman::find($id);
        $pengalaman->nama_perusahaan    = $request->nama_perusahaan;
        $pengalaman->posisi             = $request->posisi;
        $pengalaman->lama_pengalaman    = $request->lama_pengalaman;
        $pengalaman->deskripsi          = $request->deskripsi;
        $pengalaman->save();

        return redirect('/pengalaman');

    }

    public function hapus($id){
        $pengalaman = Pengalaman::find($id);
        $pengalaman->delete();

        return redirect('/pengalaman');
    }
}
