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
                                    @foreach($less as $a)
                                    <h3>{{$a->judul}}</h3>
                                    <h2>@currency($a->harga) / {{$a->pertemuan}} Pertemuan</h2>
                                    @endforeach
                                    @foreach($guru as $a)
                                    <h4>Nama Guru : {{$a->name}}</h4>
                                    @endforeach
                                    <table class="table">
                                        <form action="/murid/ubahTempLes/{{$trans->id_trans}}" method="POST">
                                            {{csrf_field()}}

                                            <tr>
                                                <th scope="col">===========</th>
                                                <td scope="col" style="text-align: left;">==================</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Gambaran Tentang Kebutuhan Anda</p>
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea name="kebutuhan" type="text" style="height: 100px;" class="form-control">
                                                    {{$trans -> kebutuhan}}
                                                    </textarea>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Ajukan tanggal pertemuan pertama
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input class="form-control" disabled value="{{$trans -> tanggal_mulai}}">
                                                    <input type="date" class="form-control" name="tanggal_mulai">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Ajukan jam pembelajaran
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" class="form-control" name="jam" value="{{$trans -> jam}}">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Nama Murid
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="{{$trans -> nama}}" class="form-control" name="nama">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Tingkat Pendidikan dan Kelas Murid
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" class="form-control" name="kelas" value="{{$trans -> kelas}}">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Kontak Pemesan
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" class="form-control" name="kontak" value="{{$trans -> kontak}}">
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col"> Alamat Tempat Belajar <p style="color: red;">(* Isi dengan Alamat Tempat Belajar)</p>
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="{{$trans->alamat}}" class="form-control" name="alamat">
                                                </td>
                                            </tr>
                                            <tr hidden>
                                                <th scope="col"> Status
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="Menunggu Konfirmasi" class="form-control" name="status">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Biaya Les</th>
                                                <td scope="col" style="text-align: left;">@currency($trans->harga)</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Adminitrasi </th>
                                                <td scope="col" style="text-align: left;">
                                                    @currency($trans->adm)
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Total Pembayaran </th>
                                                <td scope="col" style="text-align: left;">
                                                    @currency($trans->total)
                                                </td>
                                            </tr>
                                    </table>
                                    <button type="submit" class="btn btn-info">Ubah</button>
                                    <a href="/murid/bayarLes/{{$trans->id_trans}}" class="btn btn-success" type="button" style="color: white;"><i class="fa fa-shopping-cart" style="color: white;"></i> Bayar</a>
                                    <a href="{{route ('murid/showPilihLes')}}" class="btn btn-danger" type="button" style="color: white;">Batal</a>
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