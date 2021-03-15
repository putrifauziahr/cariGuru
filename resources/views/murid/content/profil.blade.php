@extends('murid/layouts/murid')

@section('title', 'Murid | Profil CariGuru.com')

@section ('container')
<br>
<br>

<style>
    .user-profile {
        padding: 15px;
    }

    .user-profile .user-content,
    .user-profile .user-name,
    .user-profile .user-email {
        color: #fff;
        overflow: hidden;
        white-space: nowrap;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
    }

    .create-btn {
        height: 40px;
        background: #343a40;
    }
</style>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center"><strong>PROFIL</strong></h2>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: lightblue;">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-4">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class=" m-t-30"> <img src="{{ url('/fotoProfilMurid/'. Auth::user()->image) }}" class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                            <h6 class="card-subtitle">Murid</h6>
                        </center>
                        <form action="/murid/updateFotoProfil" method="POST" enctype="multipart/form-data">
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
                        <form class="form-horizontal form-material" action="/murid/updateProfil" method="POST">
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
<br>
<br>

@endsection