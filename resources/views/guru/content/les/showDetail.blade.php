@extends('guru/layouts/guru')

@section('title', 'Detail Les Guru | CariGuru.com')

@section ('container')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/guru/dashboard_guru')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Les</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class="m-t-30"> <img src="{{ url('/berkasLes/'.$tampilkan_data->file) }}" width="300">
                            <br>
                            <br>
                            <p style="color: black; font-size:20px">{{ $tampilkan_data->judul}}</p>
                            <p style="color: black; font-size:20px">{{ $tampilkan_data->tanggal_mulai}}</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="/guru/postUpdateLes/{{$tampilkan_data->id_les}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Judul</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $tampilkan_data->judul}}">
                                    @error('judul')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Hari Les</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('hari') is-invalid @enderror" name="hari" value="{{ $tampilkan_data->hari}}">
                                    @error('hari')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Jam Les</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('jam') is-invalid @enderror" name="jam" value="{{ $tampilkan_data->jam}}">
                                    @error('jam')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Sasaran Murid Les</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('sasaran') is-invalid @enderror" name="sasaran" value="{{ $tampilkan_data->sasaran}}">
                                    @error('sasaran')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Sasaran Kelas Murid Les</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ $tampilkan_data->kelas}}">
                                    @error('kelas')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Deskripsi</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $tampilkan_data->deskripsi}}">
                                    @error('deskripsi')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Tanggal Mulai</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" value="{{ $tampilkan_data->tanggal_mulai}}">
                                    @error('tanggal_mulai')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12 mb-0">Biaya / Pertemuan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $tampilkan_data->harga}}">
                                    @error('harga')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12 mb-0">Berkas Pendukung</label>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="file" type="file" class="form-control" multiple />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">
                                        Update Data Les</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection