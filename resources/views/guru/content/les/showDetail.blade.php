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
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header" style="color: white; font-size:20px; background-color:gray">
                            <i class="fas fa-table mr-1" style="color: white;"></i>
                            Detail Les
                        </div>
                        <br>
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
                                <label class="col-md-12 mb-0">Waktu Les</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('jam') is-invalid @enderror" name="jam" value="{{ $tampilkan_data->jam}}">
                                    @error('jam')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Jumlah Pertemuan / Bulan</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control @error('pertemuan') is-invalid @enderror" name="pertemuan" value="{{ $tampilkan_data->pertemuan}}">
                                    @error('pertemuan')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12 mb-0">Biaya</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $tampilkan_data->harga}}">
                                    @error('harga')<div class="invalid-feedback">{{$message}}</div> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Deskripsi Les</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="deskripsi">{{ $tampilkan_data->deskripsi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Update Data Les</button>
                                    <a type="button" class="btn btn-danger d-none d-md-inline-block text-white" href="{{route('guru/showLes')}}">Back</a>
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