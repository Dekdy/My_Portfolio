@extends('Master')
@section('title','Dashboard')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                <h3>Selamat Datang!!! Anda Login Sebagai {{$user->nama}}</h3>
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading text-uppercase">Member</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-primary"><span>{{$member = DB::table('member')->count()}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading text-uppercase">Kategori</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success"><span>{{$kategori = DB::table('kategori')->count()}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading text-uppercase">Buku</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-primary"><span>{{$buku = DB::table('buku')->count()}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-12">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading text-uppercase">Peminjaman Buku</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success"><span>{{$pinjam = DB::table('peminjaman_buku')->count()}}</span></div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>       
@endsection