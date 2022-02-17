@extends('Master')
@section('title','Pendidikan Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Ini Halaman Pendidikan
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-card mb-3 p-3 card">
                    <div class="page-title-actions">
                        <a href="/pendidikan/tambah" class="btn btn-primary">
                            Tambah
                        </a>
                    </div> 
               </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                <strong>{{ $message }}</strong>
            </div>
            @endif


            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Tabel Pendidikan</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="width: 200px;">Nama Sekolah</th>
                                    <th style="width: 250px;">Deskripsi</th>
                                    <th>Class</th>
                                    <th>Lama Sekolah</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                @php
                                  $no = 1;  
                                @endphp
                                @foreach ($pendidikans as $pendidikan)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$pendidikan->nama_pendidikan}}</td>
                                        <td>{{$pendidikan->deskripsi}}</td>
                                        <td>{{$pendidikan->class}}</td>
                                        <td>{{$pendidikan->tahun_pendidikan}}</td>
                                        <td>
                                            <a href="/pendidikan/edit/{{$pendidikan->id_pendidikan}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="/pendidikan/hapus/{{$pendidikan->id_pendidikan}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
@endsection