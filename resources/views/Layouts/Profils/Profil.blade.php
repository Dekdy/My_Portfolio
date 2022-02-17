@extends('Master')
@section('title','Profil Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Ini Halaman Profil
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-card mb-3 p-3 card">
                    <div class="page-title-actions">
                        <a href="" class="btn btn-primary">
                            Tambah
                        </a>
                    </div> 
               </div>
            </div>
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Profil Diri</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jurusan</th>
                                    <th>Tentang</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                @php
                                  $no = 1;  
                                @endphp
                                @foreach ($profils as $profil)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$profil->nama_lengkap}}</td>
                                        <td>{{$profil->jurusan}}</td>
                                        <td>{{$profil->tentang}}</td>
                                        <td><img width="100px" src="{{url('/img/'.$profil->gambar)}}" alt=""></td>
                                        <td>
                                            <a href="">Edit</a>
                                            <a href="">Hapus</a>
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