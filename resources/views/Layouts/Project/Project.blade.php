@extends('Master')
@section('title','Project Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Ini Halaman Project
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-card mb-3 p-3 card">
                    <div class="page-title-actions">
                        <a href="/project/tambah" class="btn btn-primary">
                            Tambah
                        </a>
                    </div> 
               </div>
            </div>
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Tabel Skills</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Project</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                @php
                                  $no = 1;  
                                @endphp
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$project->judul_project}}</td>
                                        <td><img width="100px" src="{{url('/img/'.$project->file)}}" alt=""></td>
                                        <td>
                                            <a href="/skill/edit/{{$project->id}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="/skill/hapus/{{$project->id}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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