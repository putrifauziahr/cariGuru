@extends('murid/layouts/murid')

@section('title', 'Pembayaran | CariGuru.com')

@section ('container')
<br>
<br>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center"><strong style="font-size: 25px;">Pembayaran</strong></h2>
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
                                    <table class="table">
                                        <form action="/murid/updateBayar/{{$detail->id_detail}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <tr>
                                                <th scope="col">
                                                    Status Pembayaran
                                                </th>
                                                <td scope="col" style="text-align: left; color:red">
                                                    {{$detail->status_detail}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col">
                                                    Nama Pemesan
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="{{Auth::user()->name}}" class="form-control" disabled>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Detail Pesanan
                                                </th>
                                                @foreach($detaill as $d)
                                                <td scope="col" style="text-align: left;">Judul Les :
                                                    <input disabled type="text" class="form-control" value="{{$d-> judul}}">
                                                </td>

                                                @foreach($guru as $g)
                                                <td scope="col" style="text-align: left;">Nama Guru:
                                                    <input disabled type="text" class="form-control" value="{{$g->name}}">
                                                </td>
                                                @endforeach
                                            </tr>

                                            <tr>
                                                <th scope="col"> Total Pembayaran </th>
                                                <td scope="col" style="text-align: left;">
                                                    @currency($d->total)
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Bukti Pembayaran </th>
                                                <td scope="col" style="text-align: left;">
                                                    <a href="{{ url('/berkasBayar/'. $detail->bukti) }}" data-fancybox="gal">
                                                        <img src="{{ url('/berkasBayar/'. $detail->bukti) }}" alt="Image" class="img-fluid" style="height: 200px; width:200px">
                                                    </a>
                                                    <input type="file" name="bukti" class="form-control">
                                                </td>
                                            </tr>

                                            <tr hidden>
                                                <th scope="col"> Status
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" name="status_detail" value="Menunggu Konfirmasi Admin" class="form-control">
                                                </td>
                                            </tr>
                                            @endforeach
                                    </table>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart" style="color: white;"></i> Konfirmasi Bukti Pembayaran</button>
                                    <a href="{{route('murid/showPembayaran')}}" class="btn btn-danger" type="button" style="color: white;">Kembali</a>
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