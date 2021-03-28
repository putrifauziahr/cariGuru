@extends('murid/layouts/murid')

@section('title', 'Murid | Profil CariGuru.com')

@section ('container')
<br>
<br>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center"><strong style="font-size: 25px;">PROFIL</strong></h2>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <center class="m-t-30">
                                        <div class="mb-4">
                                            <a href="{{ url('/fotoProfilMurid/'. Auth::user()->image) }}" data-fancybox="gal">
                                                @if(Auth::user()->image != null)
                                                <img src="{{ url('/fotoProfilMurid/'. Auth::user()->image) }}" alt="Image" class="img-circle" style="height: 250px; width:250px">
                                                @else
                                                <img src="{{ url('images/user-dummy.png') }}" alt="Image" class="img-circle" style="height: 180px; width:180px">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="mt-4">
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
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <table class="table">
                                        <form class="form-horizontal form-material" action="/murid/updateProfil" method="POST">
                                            {{csrf_field()}}
                                            <tr>
                                                <th scope="col" style="text-align: left; border-color: white; ">
                                                    <label class="form-control">Nama Lengkap</label>
                                                </th>
                                                <td scope="col" style="text-align: left; border-color: white;">
                                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col" style="text-align: left;border-color: white;">
                                                    <label class="form-control">Email</label>
                                                </th>
                                                <td scope="col" style="text-align: left;border-color: white;">
                                                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col" style="text-align: left;border-color: white;">
                                                    <label class="form-control">Password</label>
                                                </th>
                                                <td scope="col" style="text-align: left;border-color: white;">
                                                    <input class="form-control" type="password" name="password">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col" style="text-align: left;border-color: white;">
                                                    <label class="form-control">Kontak</label>
                                                </th>
                                                <td scope="col" style="text-align: left;border-color: white;">
                                                    <input type="text" class="form-control" name="kontak" value="{{ Auth::user()->kontak }}">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col" style="text-align: left;border-color: white;">
                                                    <label class="form-control">Alamat</label>
                                                </th>
                                                <td scope="col" style="text-align: left;border-color: white;">
                                                    <input type="text" class="form-control" name="alamat" value="{{ Auth::user()->alamat }}">
                                                </td>
                                            </tr>
                                    </table>
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Update Profile</button>
                                    <a href="{{route('murid/dashboard_murid')}}" class="btn btn-danger" type="button" style="color: white;">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
@endsection