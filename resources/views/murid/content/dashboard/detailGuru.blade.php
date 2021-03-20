@extends('murid/layouts/murid')

@section('title', 'Profil Guru | CariGuru.com')

@section ('container')

<br>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center"><strong style="font-size: 25px;">PROFIL GURU</strong></h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="productinfo text-center">
                            <center class="m-t-30">
                                <a href="{{ url('/fotoProfil/'. $les->users->image)}}" data-fancybox="gal">
                                    <img src="{{ url('/fotoProfil/'. $les->users->image)}}" alt="Image" class="img-fluid" style="height: 250px; width:300px">
                                </a>
                            </center>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="productinfo text-center">
                            <center class="m-t-30">
                                <h4>Berkas Pendukung</h4>
                                <a href="{{ url('/berkasBiodata/'. $les->users->file)}}" data-fancybox="gal">
                                    <img src="{{ url('/berkasBiodata/'. $les->users->file)}}" alt="Image" class="img-fluid" style="height: 250px; width:300px">
                                </a>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <h3>{{$les -> users -> name}}</h3>
                                        <table class="table">
                                            <tr>
                                                <th scope="col"> Nama Lengkap </th>
                                                <td scope="col" style="text-align: left;">{{$les ->users-> name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Kontak </th>
                                                <td scope="col" style="text-align: left;">{{$les ->users-> kontak}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Email </th>
                                                <td scope="col" style="text-align: left;">{{$les ->users-> email}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Alamat </th>
                                                <td scope="col" style="text-align: left;">{{$les ->users-> alamat}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Pekerjaan </th>
                                                <td scope="col" style="text-align: left;">{{$les ->users-> pekerjaan}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Bidang Keahlian</th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea cols="10" rows="5" class="form-control">
                                                    {{$les ->users-> keahlian}}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Pengalaman</th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea cols="10" rows="5" class="form-control">
                                                    {{$les ->users-> pengalaman}}
                                                    </textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Riwayat Pendidikan</th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea cols="10" rows="5" class="form-control">
                                                    {{$les ->users-> sekolah}}
                                                    </textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Deskripsi Diri</th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea cols="10" rows="5" class="form-control">
                                                    {{$les ->users-> deskripsi}}
                                                    </textarea>
                                                </td>
                                            </tr>
                                        </table>
                                        <a href="{{route('murid/dashboard_murid')}}" class="btn btn-danger" type="button" style="color: white;">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!--/slider-->
@endsection