@extends('Master')
@section('title','Pengalaman Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Ini Halaman Pengalaman
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-card mb-3 p-3 card">
                    <div class="page-title-actions">
                        <a href="/pengalaman/tambah" class="btn btn-primary">
                            Tambah
                        </a>
                    </div> 
               </div>
            </div>
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Tabel Pengalaman</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi</th>
                                    <th style="width: 300px">Deskripsi</th>
                                    <th>Lama Bekerja</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                @php
                                  $no = 1;  
                                @endphp
                                @foreach ($pengalamans as $pengalaman)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$pengalaman->nama_perusahaan}}</td>
                                        <td>{{$pengalaman->posisi}}</td>
                                        <td>{{$pengalaman->deskripsi}}</td>
                                        <td>{{$pengalaman->lama_pengalaman}}</td>
                                        <td>
                                            <a href="/pengalaman/edit/{{$pengalaman->id_pengalaman}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="/pengalaman/hapus/{{$pengalaman->id_pengalaman}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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