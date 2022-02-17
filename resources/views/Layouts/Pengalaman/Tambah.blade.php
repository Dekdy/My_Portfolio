@extends('Master')
@section('title','Tambah Pengalaman Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Tambah Pengalaman
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form class="" action="/pengalaman/proses" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">Nama Perusahaan</label>
                                            <input name="nama_perusahaan" id="exampleEmail11" placeholder="Nama Perusahaan" type="text" class="form-control" value="{{old('nama_perusahaan')}}">
                                            @if ($errors->has('nama_perusahaan'))
                                                <span class="text-danger">{{ $errors->first('nama_perusahaan')}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Posisi</label>
                                            <input name="posisi" id="examplePassword11" placeholder="Posisi kamu saat bekerja" type="text" class="form-control" value="{{old('posisi')}}">
                                            @if ($errors->has('posisi'))
                                                <span class="text-danger">{{ $errors->first('posisi')}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Lama Pengalaman Bekerja</label>
                                            <input name="lama_pengalaman" id="examplePassword11" placeholder="Input Berapa Lama Anda Bekerja" type="text" class="form-control" value="{{old('lama_pengalaman')}}">
                                            @if ($errors->has('lama_pengalaman'))
                                                <span class="text-danger">{{ $errors->first('lama_pengalaman')}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Deskripsi</label>
                                            <textarea name="deskripsi" id="examplePassword11" placeholder="Ceritakan Pengalaman Anda Saat Bekerja" type="text" class="form-control" rows="4">{{old('deskripsi')}}</textarea>
                                            @if ($errors->has('deskripsi'))
                                                <span class="text-danger">{{ $errors->first('deskripsi')}}
                                            @endif
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