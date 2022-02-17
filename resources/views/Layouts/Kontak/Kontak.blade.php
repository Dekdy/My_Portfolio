@extends('Master')
@section('title','Kontak Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Ini Halaman Kontak
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Tabel Kontak</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Komentar</th>
                                </tr>
                                </thead>
                                @php
                                  $no = 1;  
                                @endphp
                                @foreach ($kontaks as $kontak)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$kontak->username}}</td>
                                        <td>{{$kontak->email}}</td>
                                        <td>{{$kontak->komentar}}</td>
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