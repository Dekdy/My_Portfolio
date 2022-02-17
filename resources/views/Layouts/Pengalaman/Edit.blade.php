@extends('Master')
@section('title','Edit Data Pengalaman Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Edit Data Pengalaman
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form class="" action="/pengalaman/update/{{$pengalaman->id_pengalaman}}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">Nama Perusahaan</label>
                                            <input name="nama_perusahaan" id="exampleEmail11" placeholder="Input Skill Anda" type="text" class="form-control" required value="{{$pengalaman->nama_perusahaan}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Posisi</label>
                                            <input name="posisi" id="examplePassword11" placeholder="Input Percentase dari Skill Anda" type="text" class="form-control" required value="{{$pengalaman->posisi}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Lama Bekerja</label>
                                            <input name="lama_pengalaman" id="examplePassword11" placeholder="Input Percentase dari Skill Anda" type="text" class="form-control" required value="{{$pengalaman->lama_pengalaman}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Deskripsi</label>
                                            <textarea name="deskripsi" id="examplePassword11" placeholder="Input Percentase dari Skill Anda" type="text" class="form-control" rows="4">{{$pengalaman->deskripsi}}</textarea>
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