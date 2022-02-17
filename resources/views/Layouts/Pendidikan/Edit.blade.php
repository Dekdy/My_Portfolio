@extends('Master')
@section('title','Edit Data Pendidikan Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Edit Data Pendidikan
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form class="" action="/pendidikan/update/{{$pendidikan->id_pendidikan}}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">Nama Pendidikan</label>
                                            <input name="nama_pendidikan" id="exampleEmail11" placeholder="Input Nama Sekolah" type="text" class="form-control" value="{{$pendidikan->nama_pendidikan}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Class</label>
                                            <input name="class" id="examplePassword11" placeholder="Deskripsi Sekolah Anda" type="text" class="form-control" value="{{$pendidikan->class}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Tahun Sekolah</label>
                                            <input name="tahun_pendidikan" id="examplePassword11" placeholder="Lama Anda mengengban Pendidikan" type="text" class="form-control" value="{{$pendidikan->tahun_pendidikan}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Deskripsi</label>
                                            <textarea name="deskripsi" id="examplePassword11" placeholder="Deskripsi Sekolah Anda" type="text" class="form-control" rows="4">{{$pendidikan->deskripsi}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="mt-2 btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>       
@endsection