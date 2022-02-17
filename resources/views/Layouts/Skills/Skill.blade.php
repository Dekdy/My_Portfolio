@extends('Master')
@section('title','Skill Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Ini Halaman Skill
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="main-card mb-3 p-3 card">
                    <div class="page-title-actions">
                        <a href="/skill/tambah" class="btn btn-primary">
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
                                    <th>Nama Skill</th>
                                    <th>Icon</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                @php
                                  $no = 1;  
                                @endphp
                                @foreach ($skills as $skill)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$skill->nama}}</td>
                                        <td><i class="{{$skill->icon}}" style="font-size: 50px; text-align: center"></i></td>
                                        <td>
                                            <a href="/skill/edit/{{$skill->id}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="/skill/hapus/{{$skill->id}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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