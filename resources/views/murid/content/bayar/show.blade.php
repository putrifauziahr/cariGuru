@extends('murid/layouts/murid')

@section('title', 'Riwayat Transaksi | CariGuru.com')

@section ('container')

<br>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center"><strong style="font-size: 25px;">Riwayat Transaksi</strong></h2>
                </div>
            </div>
        </div>

        @if(Session::has('alert'))
        <div class="alert alert-success">
            {{ Session::get('alert') }}
            @php
            Session::forget('alert');
            @endphp
        </div>
        @elseif(Session::get('alertF'))
        <div class="alert alert-danger">
            {{ Session::get('alertF') }}
            @php
            Session::forget('alertF');
            @endphp
        </div>
        @endif


        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Nama Pemesan</th>
                                        <th class="border-top-0">Total Pembayaran</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($detail as $a )
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{Auth::user()->name}}</td>
                                        <td>@currency($a->total)</td>
                                        <td>{{$a->status_detail}}</td>
                                        @if ($a->status_detail == "Belum Melakukan Pembayaran")
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-info mr-2" href="/murid/showDetailBayar/{{$a->id_detail}}" style="color: white;">Detail
                                                </a>
                                                <a class="btn btn-danger" href="/murid/hapusDetailTrans/{{$a->id_detail}}" style="color: white;">Batal Transaksi</a>
                                            </div>


                                        </td>
                                        @elseif ($a->status_detail == "Menunggu Konfirmasi Admin")
                                        <td>
                                            <a class="btn btn-info" href="/murid/showDetailBayarLagi/{{$a->id_detail}}" style="color: white;">Detail</a>
                                        </td>
                                        @elseif ($a->status_detail == "Berhasil")
                                        <td>
                                            <a class="btn btn-info" href="/murid/showDetailBayarLagi/{{$a->id_detail}}" style="color: white;">Detail</a>
                                        </td>
                                        @elseif ($a->status_detail == "Gagal")
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-info mr-2" href="/murid/showDetailBayar/{{$a->id_detail}}" style="color: white;">Detail
                                                </a>
                                                <a class="btn btn-danger" href="/murid/hapusDetailTrans/{{$a->id_detail}}" style="color: white;">Batal Transaksi</a>
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