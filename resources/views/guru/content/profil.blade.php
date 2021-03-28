@extends('guru/layouts/guru')

@section('title', 'Profil Guru | CariGuru.com')

@section ('container')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <br>
        @if(Session::has('alert'))
        <div class="alert alert-success">
            {{ Session::get('alert') }}
            @php
            Session::forget('alert');
            @endphp
        </div>
        @elseif(Session::get('alertF'))
        <div class="alert alert-danger">
            {{ Session::get('alertF') }}
            @php
            Session::forget('alertF');
            @endphp
        </div>
        @endif
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <div class="card-header" style="color: black; font-size:20px; text-align:center;">
                            <i class="fa fa-user mr-1"></i>
                            Profil Guru
                        </div>
                        <center class="m-t-30">
                            <a href="{{ url('/fotoProfil/'. Auth::user()->image) }}" data-fancybox="gal">
                                @if(Auth::user()->image != null)
                                <img src="{{ url('/fotoProfil/'. Auth::user()->image) }}" alt="Image" class="img-circle" style="height: 250px; width:250px">
                                @else
                                <img src="{{ url('images/user-dummy.png') }}" alt="Image" class="img-circle" style="height: 180px; width:180px">
                                @endif
                            </a>
                            <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                            <h6 class="card-subtitle">Guru</h6>
                        </center>
                        <form action="/guru/updateFotoProfil" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group alert-up-pd">
                                <div class="form-group">
                                    <input name="image" type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 d-flex">
                                        <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                            Foto Profile</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body profile-card">
                        <div class="card-header" style="color: black; font-size:20px; text-align:center;">
                            <i class="fa fa-user mr-1"></i>
                            Sertifikat Keahlian / Piagam Perlombaan
                        </div>
                        <center class="m-t-30">
                            @if(Auth::user()->file != null)
                            <embed width="300px" type="application/pdf" src="{{ url('/berkasBiodata/'. Auth::user()->file) }}" alt="Image" class="img-circle" style="height: 250px; width:250px">
                            @else
                            <img src="{{ url('images/user-dummy.png') }}" alt="Image" class="img-circle" style="height: 180px; width:180px">
                            @endif
                        </center>
                        <form action="/guru/updateBerkasProfil" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group alert-up-pd">
                                <div class="form-group">
                                    <input name="file" type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 d-flex">
                                        <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                            Berkas</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="/guru/updateProfil" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control pl-0 form-control-line" name="name" value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" class="form-control pl-0 form-control-line" name="email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Password</label>
                                <div class="col-md-12">
                                    <input type="password" name="password" class="form-control pl-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Kontak</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ Auth::user()->kontak }}" name="kontak" class="form-control pl-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Alamat</label>
                                <div class="col-md-12">
                                    <input rows="5" class="form-control pl-0 form-control-line" name="alamat" value="{{ Auth::user()->alamat }}"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Bidang Keahlian</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="keahlian">{{ Auth::user()->keahlian }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Pekerjaan</label>
                                <div class="col-md-12">
                                    <input rows="5" class="form-control pl-0 form-control-line" name="pekerjaan" value="{{ Auth::user()->pekerjaan }}"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Metode Mengajar</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" cols="10" rows="5" name="pengalaman"> {{ Auth::user()->pengalaman}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Pengalaman dan Riwayat Hidup</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" cols="10" rows="5" name="sekolah">{{ Auth::user()->sekolah }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Deskripsi Diri</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" cols="10" rows="5" name="deskripsi">{{ Auth::user()->deskripsi }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                        Profile</button>
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