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
                                <h2>Guru Datang ke Rumah mu</h2>
                                <p align="justify">Guru datang ke rumah mu lho.. Benar! Belajarnya tatap muka</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('images/home/boy1.jpg')}}" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span style="color: #2980B9">CARI</span>GURU.COM</h1>
                                <h2>Les Privat</h2>
                                <p align="justify">Belajarnya bisa konsentrasi tentunya, dibimbing oleh Guru yang Kompeten di Bidangnya</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('images/home/boy1.jpg')}}" class="girl img-responsive" alt="" />
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

                    @foreach($guru as $l)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('/fotoProfil/'. $l->image) }}" data-fancybox="gal">
                                        @if($l->image != null)
                                        <img src="{{ url('/fotoProfil/'. $l->image) }}" alt="Image" class="img-circle" style="height: 250px; width:250px">
                                        @else
                                        <img src="{{ url('images/user-dummy.png') }}" alt="Image" class="img-circle" style="height: 180px; width:180px">
                                        @endif
                                    </a>
                                    <h3>{{$l ->name}}</h3>
                                    <p>Guru</p>
                                    <h5>{{$l->alamat}} </h5>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Reservasi</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h3 style="color: white;">{{$l -> name}}</h3>
                                        <h2>{{$l -> alamat}}</h2>
                                        <a href="/murid/showDetailGuru/{{$l->id}}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Profil Guru</a>
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