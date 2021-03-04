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
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class="m-t-30"> <img src="{{ url('/fotoProfil/'. Auth::user()->image) }}" class="rounded-circle" width="150" />
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
                                    <input type="password" value="{{ Auth::user()->password }}" name="password" class="form-control pl-0 form-control-line">
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