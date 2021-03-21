@extends('murid/layouts/murid')

@section('title', 'Detail Les | CariGuru.com')

@section ('container')

<br>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center"><strong style="font-size: 25px;">DETAIL LES</strong></h2>
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
                                    <img src="{{ url('/fotoProfil/'. $les->users->image)}}" alt="Image" class="img-fluid" style="height: 300px;">
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
                                        <h3>{{$les -> judul}}</h3>
                                        <h2>@currency($les -> harga) / {{$les -> pertemuan}} Pertemuan</h2>
                                        <h5>Guru : {{$les -> users -> name}}</h5>
                                        <table class="table">
                                            <tr hidden>
                                                <th scope="col">ID Guru</th>
                                                <td scope="col" style="text-align: left;">{{$les->users->id}}</td>
                                            </tr>
                                            <tr hidden>
                                                <th scope="col">ID Les</th>
                                                <td scope="col" style="text-align: left;">{{$les->id_les}}</td>
                                            </tr>
                                            <tr hidden>
                                                <th scope="col">ID User</th>
                                                <td scope="col" style="text-align: left;">{{Auth::user()->id}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Waktu Les </th>
                                                <td scope="col" style="text-align: left;">{{$les -> jam}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Jumlah Pertemuan</th>
                                                <td scope="col" style="text-align: left;">{{$les -> pertemuan}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Deskripsi Les </th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea cols="30" rows="10" class="form-control">
                                                    {{$les->deskripsi}}
                                                    </textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col">==============</th>
                                                <td scope="col" style="text-align: left;">==============</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Nama Guru </th>
                                                <td scope="col" style="text-align: left;">{{$les ->users-> name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Kontak Guru </th>
                                                <td scope="col" style="text-align: left;">{{$les ->users-> kontak}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Alamat Guru </th>
                                                <td scope="col" style="text-align: left;">{{$les ->users-> alamat}}</td>
                                            </tr>
                                        </table>
                                        <a href="/murid/pilihLes/{{$les->id_les}}" class="btn btn-success" type="button" style="color: white;"><i class="fa fa-shopping-cart" style="color: white;"></i> Checkout</a>
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