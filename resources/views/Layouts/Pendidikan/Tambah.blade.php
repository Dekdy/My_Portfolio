@extends('Master')
@section('title','Tambah Pendidikan Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Tambah Pendidikan
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form class="" action="/pendidikan/proses" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">Nama Pendidikan</label>
                                            <input name="nama_pendidikan" id="exampleEmail11" placeholder="Input Nama Sekolah" type="text" class="form-control">
                                            @if ($errors->has('nama_pendidikan'))
                                                <span class="text-danger">{{ $errors->first('nama_pendidikan')}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Class</label>
                                            <input name="class" id="examplePassword11" placeholder="Deskripsi Sekolah Anda" type="text" class="form-control">
                                            @if ($errors->has('class'))
                                                <span class="text-danger">{{ $errors->first('class')}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Tahun Sekolah</label>
                                            <input name="tahun_pendidikan" id="examplePassword11" placeholder="Lama Anda mengengban Pendidikan" type="text" class="form-control">
                                            @if ($errors->has('tahun_pendidikan'))
                                            <span class="text-danger">{{ $errors->first('tahun_pendidikan') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Deskripsi</label>
                                            <textarea name="deskripsi" id="examplePassword11" placeholder="Deskripsi Sekolah Anda" type="text" class="form-control" rows="4"></textarea>
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