@extends('Master')
@section('title','Tambah Skill Page')
@section('konten')
    <div class="app-page-title">
        <div class="page-title-wrapper justify-content-center">
            <div class="page-title-heading text-center">
                Tambah Skill
            </div>  
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form class="" action="/skill/proses" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail11" class="">Nama Skill</label>
                                            <input name="nama" id="exampleEmail11" placeholder="Input Skill Anda" type="text" class="form-control" value="{{old('nama')}}">
                                            @if ($errors->has('nama'))
                                                <span class="text-danger">{{ $errors->first('nama')}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword11" class="">Icon Fontawesome</label>
                                            <input name="icon" id="examplePassword11" placeholder="Input Icon dari fontawesome Anda" type="text" class="form-control">
                                            @if ($errors->has('icon'))
                                                <span class="text-danger">{{ $errors->first('icon')}}
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