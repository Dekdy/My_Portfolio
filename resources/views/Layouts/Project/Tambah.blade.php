@extends('Master')
@section('title','Tambah Project Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Tambah Project
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form class="" action="/project/proses" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">Judul Project</label>
                                            <input name="judul_project" id="exampleEmail11" placeholder="Judul Project Anda..." type="text" class="form-control">
                                            @if ($errors->has('judul_project'))
                                            <span class="text-danger">{{ $errors->first('judul_project')}}
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Gambar</label>
                                            <input name="file" id="examplePassword11" placeholder="Bukti Project Anda" type="file" class="form-control-file">
                                            @if ($errors->has('file'))
                                                <span class="text-danger">{{ $errors->first('file')}}
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