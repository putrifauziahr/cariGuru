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
                    <h2 class="title text-center"><strong>DETAIL LES</strong></h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="productinfo text-center">
                            <center class="m-t-30"> <img src="{{ asset('images/home/boy1.jpg')}}" class="rounded-circle" width="150" />
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
                                        <h2>{{$les -> harga}}</h2>
                                        <h3>{{$les -> judul}}</h3>
                                        <h5>Guru : {{$les -> users -> name}}</h5>
                                        <table class="table table-striped">
                                            <tr>
                                                <th scope="row">Hari Les </th>
                                                <td scope="col">{{$les -> hari}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Waktu Les </th>
                                                <td scope="col">{{$les -> jam}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Sasaran Murid Les </th>
                                                <td scope="col">{{$les -> sasaran}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Sasaran Kelas Murid Les</th>
                                                <td scope="col">{{$les -> kelas}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Deskripsi Les </th>
                                                <td scope="col">{{$les -> deskripsi}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Tanggal Mulai Les </th>
                                                <td scope="col">{{$les -> tanggal_mulai}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">==============</th>
                                                <td scope="col">==============</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Nama Guru </th>
                                                <td scope="col">{{$les ->users-> name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Kontak Guru </th>
                                                <td scope="col">{{$les ->users-> kontak}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Email Guru </th>
                                                <td scope="col">{{$les ->users-> email}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Alamat Guru </th>
                                                <td scope="col">{{$les ->users-> alamat}}</td>
                                            </tr>
                                        </table>
                                        <a href="{{route('murid/dashboard_murid')}}" class="btn btn-success" type="button" style="color: white;"><i class="fa fa-shopping-cart" style="color: white;"></i> Checkout</a>
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