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
                                    <h3>{{$transs->less->judul}}</h3>
                                    <h2>@currency($transs->less->harga) / {{$transs->less->pertemuan}} Pertemuan</h2>
                                    <h5>Untuk tingkatan : {{$transs->less->sasaran}} | Kelas : {{$transs->less->kelas}}</h5>
                                    <table class="table">
                                        <form action="/murid/ubahTempLes/{{$transs->id}}" method="POST">
                                            {{csrf_field()}}
                                            <tr>
                                                <th scope="col"> Nama Pemesan</th>
                                                <td scope="col" style="text-align: left;">{{Auth::user()->name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Nama Guru</th>
                                                <td scope="col" style="text-align: left;">{{$data->name}}</td>
                                            </tr>

                                            <tr>
                                                <th scope="col">===========</th>
                                                <td scope="col" style="text-align: left;">==================</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Alamat Tempat Belajar <p style="color: red;">(* Isi dengan Alamat Tempat Belajar)</p>
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="{{$transs->alamat}}" placeholder="Isi Alamat Tempat Belajar mu" class="form-control" name="alamat">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Biaya Les</th>
                                                <td scope="col" style="text-align: left;">@currency($transs->harga)</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Adminitrasi </th>
                                                <td scope="col" style="text-align: left;">
                                                    @currency($transs->adm)
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Total Pembayaran </th>
                                                <td scope="col" style="text-align: left;">
                                                    @currency($transs->total)
                                                </td>
                                            </tr>
                                    </table>
                                    <button type="submit" class="btn btn-info">Ubah</button>
                                    <a href="/murid/bayarLes/{{$transs->id}}" class="btn btn-success" type="button" style="color: white;"><i class="fa fa-shopping-cart" style="color: white;"></i> Bayar</a>
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