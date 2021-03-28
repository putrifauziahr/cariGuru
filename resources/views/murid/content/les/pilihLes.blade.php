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
                            @foreach($guru as $a)
                            <a href="{{ url('/fotoProfil/'. $a->image)}}" data-fancybox="gal">
                                <img src="{{ url('/fotoProfil/'. $a->image)}}" alt="Image" class="img-circle" style="height: 250px; width:250px">
                            </a>
                            <br>
                            <br>
                            <h3>{{$a->name}}</h3>
                            @endforeach
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
                                    <h4>Waktu Belajar : {{$a->jam}}</h4>
                                    @endforeach
                                    <table class="table">
                                        <form action="/murid/ubahTempLes/{{$trans->id_trans}}" method="POST">
                                            {{csrf_field()}}

                                            <tr>
                                                <th scope="col">===========</th>
                                                <td scope="col" style="text-align: left;">==================</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Gambaran Tentang Kebutuhan Anda
                                                    <p>(Isi dengan kebutuhan belajar anda,
                                                        <br>apa yang menjadi kendala anda.
                                                        <br>
                                                        Agar guru dapat memahami
                                                        <br>dan membantu anda)
                                                    </p>
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <textarea placeholder="Masukan Nama Anda" name="kebutuhan" type="text" style="height: 100px;" class="form-control @error('kebutuhan') is-invalid @enderror">
                                                    {{$trans->kebutuhan}}
                                                    </textarea>
                                                    @error('kebutuhan')<div class="invalid-feedback">{{$message}}</div> @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Ajukan tanggal pertemuan pertama
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input class="form-control" disabled value="{{$trans -> tanggal_mulai}}">
                                                    <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai">
                                                    @error('tanggal_mulai')<div class="invalid-feedback">{{$message}}</div> @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Ajukan jam pembelajaran
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" placeholder="Misal : 14.00 - 16.00 WIB" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{$trans -> waktu}}">
                                                    @error('waktu')<div class="invalid-feedback">{{$message}}</div> @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Nama Pemesan
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="{{$trans -> nama}}" class="form-control @error('nama') is-invalid @enderror" name="nama">
                                                    @error('nama')<div class="invalid-feedback">{{$message}}</div> @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Tingkat Pendidikan dan Kelas Murid
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{$trans -> kelas}}">
                                                    @error('kelas')<div class="invalid-feedback">{{$message}}</div> @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col"> Alamat Tempat Belajar <p style="color: red;">(* Isi dengan Alamat Tempat Belajar)</p>
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="{{$trans->alamat_belajar}}" class="form-control  @error('alamat_belajar') is-invalid @enderror" name="alamat_belajar">
                                                    @error('alamat_belajar')<div class="invalid-feedback">{{$message}}</div> @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col">
                                                    Kontak Pemesan
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="{{$trans -> kontak}}" class="form-control @error('kontak') is-invalid @enderror" name="kontak">
                                                    @error('kontak')<div class="invalid-feedback">{{$message}}</div> @enderror
                                                </td>
                                            </tr>

                                            <tr hidden>
                                                <th scope="col"> Status
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" value="Menunggu Konfirmasi Guru" class="form-control" name="status">
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
                                    @if($trans->status === "Belum diajukan")
                                    <button type="submit" class="btn btn-success"><i class="fa fa-shopping-cart" style="color: white;"></i> Ajukan Reservasi</button>
                                    @endif
                                    <a href="{{route ('murid/showPilihLes')}}" class="btn btn-danger" type="button" style="color: white;">Kembali</a>
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