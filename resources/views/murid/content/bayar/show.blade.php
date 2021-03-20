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
                        <h4 class="card-title">Riwayat Transaksi</h4>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">ID DETAIL TRANSAKSI</th>
                                        <th class="border-top-0">ID TRANSAKSI</th>
                                        <th class="border-top-0">ID USER</th>
                                        <th class="border-top-0">ID GURU</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($tampil_bayar as $a )
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$a->id_detail}}</td>
                                        <td>{{$a->id_trans}}</td>
                                        <td>{{$a->id_murid}}</td>
                                        <td>{{$a->id_guru}}</td>
                                        <td>
                                            <button class="btn btn-success"><a href="" style="color: white;">Konfirmasi Pembayaran</a></button>
                                            <button class="btn btn-danger"><a href="" style="color: white;">Batal Transaksi</a></button>
                                        </td>
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