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
                    <h2 class="title text-center"><strong>PROFIL GURU</strong></h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="productinfo text-center">
                            <center class="m-t-30"> <img src="{{ url('/fotoProfil/'. $les->users->image) }}" width="150" />
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
                                        <table class="table table-striped">
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