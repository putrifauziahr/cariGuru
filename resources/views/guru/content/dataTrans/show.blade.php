@extends('guru/layouts/guru')

@section('title', 'Data Transaksi| CariGuru.com')

@section ('container')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard_guru')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Transaksi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

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
                        <h4 class="card-title">Tabel Data Transaksi Murid</h4>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Nama Pemesan</th>
                                        <th class="border-top-0">Status Belajar</th>
                                        <th class="border-top-0">Status Bukti Admin</th>
                                        <th class="border-top-0">Jumlah Pemasukan</th>
                                        <th class="border-top-0">Bukti</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($data as $a )
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$a->nama}}</td>
                                        <td>{{$a->status_belajar}}</td>
                                        <td>{{$a->status_bukti}}</td>
                                        <td>@currency($a->harga)</td>
                                        <td>
                                            <a href="{{ url('/berkasTransfer/'. $a->buktilagi) }}" data-fancybox="gal">
                                                <img src="{{ url('/berkasTransfer/'. $a->buktilagi) }}" alt="Image" class="img-fluid" width="150px" height="100px">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/guru/showDetailTrans/{{$a->id_detail}}" class="btn btn-info"> Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Total Pemasukan</th>
                                        <td>@currency($income)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection