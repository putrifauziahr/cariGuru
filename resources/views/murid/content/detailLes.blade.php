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
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ asset('images/home/boy1.jpg')}}" alt="" />
                                    <h2>{{$les -> harga}}</h2>
                                    <h3>{{$les -> judul}}</h3>
                                    <p>{{$les -> hari}}</p>
                                    <p>{{$les -> jam}}</p>
                                    <p>{{$les -> sasaran}}</p>
                                    <p>{{$les -> kelas}}</p>
                                    <p>{{$les -> deskripsi}}</p>
                                    <p>{{$les -> tanggal_mulai}}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Checkout</a>
                                    <a href="{{route('murid/dashboard_murid')}}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/slider-->
@endsection