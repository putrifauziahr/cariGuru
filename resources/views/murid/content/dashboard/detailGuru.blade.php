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
                    <h2 class="title text-center"><strong style="font-size: 25px;">GURU LES PRIVAT</strong></h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="productinfo text-center">
                            <center class="m-t-30">
                                <a href="{{ url('/fotoProfil/'. $guru->image)}}" data-fancybox="gal">
                                    <img src="{{ url('/fotoProfil/'. $guru->image)}}" alt="Image" class="img-circle" style="height: 250px; width:250px">
                                </a>
                            </center>
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="card border-info mb-3">
                        <div class="productinfo text-center">
                            <h2 class="title text-center">Tentang Guru</h2>

                            <div class="card" style="width: 35rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-size: large; font-weight:bold">Jenis Les</li>
                                    <li class="list-group-item">Privat</li>
                                </ul>
                            </div>

                            <div class="card" style="width: 35rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-size: large; font-weight:bold">Tempat Les</li>
                                    <li class="list-group-item">Rumah Anda</li>
                                </ul>
                            </div>

                            <div class="card" style="width: 35rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-size: large; font-weight:bold">Kontak Guru</li>
                                    <li class="list-group-item">Email : {{$guru->email}}</li>
                                    <li class="list-group-item">Kontak : {{$guru->kontak}}</li>
                                    <li class="list-group-item">Alamat : {{$guru->alamat}}</li>
                                    <li class="list-group-item">Pekerjaan : {{$guru->pekerjaan}}</li>
                                    <li class="list-group-item">Keahlian : {{$guru->keahlian}}</li>
                                </ul>
                            </div>

                            <div class="card" style="width: 35rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-size: large; font-weight:bold">Sertifikat Keahlian / Piagam Perlombaan</li>
                                    <li class="list-group-item">
                                        <embed width="300px" type="application/pdf" src="{{ url('/berkasBiodata/'. $guru->file) }}" />
                                    </li>
                                </ul>
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
                                        @foreach($les as $les)
                                        <h3>{{$les-> judul}}</h3>
                                        <h4>Guru : {{$guru->name}}</h4>
                                        <table class="table user-table no-wrap">
                                            <tr>
                                                <th scope="col"> Judul Les </th>
                                                <td scope="col" style="text-align: left;">{{$les -> judul}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Waktu Les </th>
                                                <td scope="col" style="text-align: left;">{{$les -> jam}}</td>
                                            </tr>
                                            <tr>
                                                <th class="border-top-0"> Subjek yang diajarkan</th>
                                                @foreach($subjek as $s)
                                                <td class="border-top-0" style="text-align: left;">{{$s-> subjek}}</td>
                                            <tr class="border-top-0"></tr>
                                            <td class="border-top-0"></td>
                                            @endforeach
                                            </tr>

                                            <tr>
                                                <th class="border-top-0">Tingkat yang diajar</th>
                                                @foreach($tingkat as $t)
                                                <td class="border-top-0" style="text-align: left;">{{$t->tingkat}}</td>
                                            <tr class="border-top-0"></tr>
                                            <td class="border-top-0"></td>
                                            @endforeach
                                            </tr>


                                            <tr>
                                                <th scope="col"> Jumlah Pertemuan</th>
                                                <td scope="col" style="text-align: left;">{{$les -> pertemuan}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Biaya Les </th>
                                                <td scope="col" style="text-align: left;">@currency($les-> harga) / {{$les->pertemuan}} Pertemuan</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Deskripsi Les</th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea name="" id="" cols="10" rows="5">{{$les -> deskripsi}}</textarea>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col"> Metode Mengajar</th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea cols="10" rows="5">{{$guru->pengalaman}}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Pengalaman dan Riwayat Hidup</th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea cols="10" rows="5" class="form-group">{{$guru -> sekolah}}
                                                    </textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Deskripsi Diri</th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea cols="10" rows="5" class="form-group">
                                                    {{$guru->deskripsi}}

                                                    </textarea>
                                                </td>
                                            </tr>
                                        </table>
                                        <a href="/murid/pilihLes/{{$les->id_les}}" class="btn btn-success" type="button" style="color: white;"><i class="fa fa-shopping-cart" style="color: white;"></i> Reservasi</a>
                                        <a href="{{route('murid/dashboard_murid')}}" class="btn btn-danger" type="button" style="color: white;">Back</a>
                                        @endforeach
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