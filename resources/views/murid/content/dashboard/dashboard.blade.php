@extends('murid/layouts/murid')

@section('title', 'Dashboard Murid | CariGuru.com')

@section ('container')


<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span style="color: #2980B9">CARI</span>GURU.COM</h1>
                                <h2>Teman Belajar mu</h2>
                                <p align="justify">Merupakan sebuah platform untuk semua orang yang membutuhkan guru / tutor untuk belajar dan siap datang ke rumah mu </p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('images/home/boy1.jpg')}}" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span style="color: #2980B9">CARI</span>GURU.COM</h1>
                                <h2>Teman Belajar mu</h2>
                                <p align="justify">Merupakan sebuah platform untuk semua orang yang membutuhkan guru / tutor untuk belajar dan siap datang ke rumah mu </p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                <img src="{{ asset('images/home/pricing.png')}}" class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span style="color: #2980B9">CARI</span>GURU.COM</h1>
                                <h2>Teman Belajar mu</h2>
                                <p align="justify">Merupakan sebuah platform untuk semua orang yang membutuhkan guru / tutor untuk belajar dan siap datang ke rumah mu </p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                <img src="{{ asset('images/home/pricing.png')}}" class="pricing" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center"><strong style="font-size: 25px;">CARI GURU</strong></h2>

                    @foreach($les as $l)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{ url('/fotoProfil/'. $l->users->image) }}" width="300" />
                                    <h3>{{$l -> users-> name}}</h3>
                                    <p>Guru</p>
                                    <h2>{{$l -> judul}} </h2>
                                    <h5>{{$l->users->alamat}} </h5>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Checkout</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h3 style="color: white;">{{$l -> judul}}</h3>
                                        <h2>@currency($l -> harga) / Bulan</h2>
                                        <a href="/murid/showDetailGuru/{{$l->id_les}}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Profil Guru</a>
                                        <a href="/murid/showDetailLes/{{$l->id_les}}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Detail Les</a>
                                        <a href="/murid/pilihLes/{{$l->id_les}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection