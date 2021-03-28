@extends('murid/layouts/murid')

@section('title', 'Keranjang Les | CariGuru.com')

@section ('container')
<br>
<br>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center"><strong style="font-size: 25px;">DATA RESERVASI</strong></h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="productinfo text-center">
                        <center class="m-t-30">
                            <a href="{{ url('/fotoProfilMurid/'. Auth::user()->image) }}" data-fancybox="gal">
                                <img src="{{ url('/fotoProfilMurid/'. Auth::user()->image) }}" alt="Image" class="img-circle" style="height: 100px; width:100px">
                                <h4>{{Auth::user()->name}}</h4>
                                <p>Pemesan</p>
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
                                    <div class="table-responsive">
                                        <table class="table user-table no-wrap" style="border-color: grey;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Judul Les</th>
                                                    <th scope="col">Total Biaya</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 0; ?>
                                                @foreach($trans as $a)
                                                <?php $no++; ?>
                                                <td scope="col" style="text-align: left;">{{$no}}</td>
                                                <td scope="col" style="text-align: left;">{{$a->judul}}</td>
                                                <td scope="col" style="text-align: left;">{{$a->total}}</td>
                                                <td scope="col" style="text-align: left;">
                                                    <input type="text" name="status" value="Berhasil" hidden>{{$a->status}}
                                                </td>
                                                @if ($a->status == "Belum diajukan")
                                                <td scope="col" style="text-align: left;">
                                                    <a href="/murid/showDetailTempLes/{{$a->id_trans}}" class="btn btn-info">Detail</a>
                                                    <a href="/murid/hapusTempLes/{{$a->id_trans}}" class="btn btn-danger">Hapus</a>
                                                </td>
                                                @elseif ($a->status == "Menunggu Konfirmasi Guru")
                                                <td scope="col" style="text-align: left;">
                                                    <a href="/murid/showDetailTempLes/{{$a->id_trans}}" class="btn btn-info">Detail</a>
                                                    <a href="/murid/hapusTempLes/{{$a->id_trans}}" class="btn btn-danger">Hapus</a>
                                                </td>

                                                @elseif ($a->status == "Diterima")
                                                @php
                                                $ts_detail = App\TransaksiDetail::where('id_trans', $a->id_trans)->first();
                                                @endphp
                                                @if(!$ts_detail)
                                                <td scope="col" style="text-align: left;">
                                                    <a href="/murid/bayarLes/{{$a->id_trans}}" class="btn btn-success"><i class="fa fa-shopping-cart" style="color: white;"></i> Bayar</a>
                                                    <a href="/murid/hapusTempLes/{{$a->id_trans}}" class="btn btn-danger">Batalkan Reservasi</a>
                                                </td>
                                                @else
                                                @if($ts_detail->bukti === null)
                                                <td scope="col" style="text-align: left;">
                                                    <a href="/murid/bayarLes/{{$a->id_trans}}" class="btn btn-success"><i class="fa fa-shopping-cart" style="color: white;"></i> Bayar</a>
                                                    <a href="/murid/hapusTempLes/{{$a->id_trans}}" class="btn btn-danger">Batalkan Reservasi</a>
                                                </td>
                                                @else
                                                <td scope="col" style="text-align: left;">
                                                    <a href="#" class="btn btn-success"><i class="fa fa-check mr-2" style="color: white;"></i>Sudah Bayar</a>
                                                    <a href="/murid/showDetailTempLes/{{$a->id_trans}}" class="btn btn-info">Detail</a>
                                                </td>
                                                @endif
                                                @endif
                                                @elseif ($a->status == "Ditolak")
                                                <td scope="col" style="text-align: left;">
                                                    <a href="/murid/showDetailLesLagi/{{$a->id_trans}}" class="btn btn-info">Detail</a>
                                                    <a href="/murid/hapusTempLes/{{$a->id_trans}}" class="btn btn-danger">Hapus</a>
                                                </td>
                                                @endif
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
</div>
@endsection