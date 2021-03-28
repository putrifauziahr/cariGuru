@extends('landing/layouts/landing')

@section('title', 'CariGuru')

@section ('container')

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
                                        <a href="{{route('login')}}" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Profil Guru</a>
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