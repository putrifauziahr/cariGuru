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
                                        <table class="table user-table no-wrap">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">No</th>
                                                    <th class="border-top-0">ID Transaksi</th>
                                                    <th class="border-top-0">Alamat Pemesan</th>
                                                    <th class="border-top-0">Total Transaksi</th>
                                                    <th class="border-top-0">ID GURU</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 0; ?>
                                                @foreach($data as $a )
                                                <?php $no++; ?>
                                                <tr>
                                                    <td>{{$no}}</td>
                                                    <td>{{$a->id_detail}}</td>
                                                    <td>{{$a->alamat}}</td>
                                                    <td>{{$a->total}}</td>
                                                    <td>{{$a->name}}</td>
                                                    <td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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