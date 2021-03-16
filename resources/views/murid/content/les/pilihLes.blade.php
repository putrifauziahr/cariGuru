@extends('murid/layouts/murid')

@section('title', 'Keranjang Les | CariGuru.com')

@section ('container')
<br>
<br>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center"><strong style="font-size: 25px;">CHECKOUT</strong></h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="productinfo text-center">
                        <center class="m-t-30">
                            <a href="{{ url('/berkasLes/'. $transs->less->file)}}" data-fancybox="gal">
                                <img src="{{ url('/berkasLes/'. $transs->less->file)}}" alt="Image" class="img-fluid" style="height: 300px;">
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
                                    <h2>{{$transs->less->harga}}</h2>
                                    <h3>{{$transs->less->judul}}</h3>
                                    <table class="table">
                                        <form action="/murid/ubahTempLes/{{$transs->id}}" method="POST">
                                            {{csrf_field()}}
                                            <tr>
                                                <th scope="col"> ID </th>
                                                <td scope="col" style="text-align: left;">{{$transs->id}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Biaya / Pertemuan</th>
                                                <td scope="col" style="text-align: left;">{{$transs->harga}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Jumlah Pertemuan </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="number" value="{{$transs->qty}}" class="form-control" name="qty">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Subtotal </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$transs->subtotal}}
                                                </td>
                                            </tr>
                                    </table>
                                    <button type="submit" class="btn btn-info">Ubah</button>
                                    <a href="{{route('murid/dashboard_murid')}}" class="btn btn-success" type="button" style="color: white;"><i class="fa fa-shopping-cart" style="color: white;"></i> Checkout</a>
                                    <a href="/murid/hapusTempLes/{{$transs->id}}" class="btn btn-danger" type="button" style="color: white;">Batal</a>
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
@endsection