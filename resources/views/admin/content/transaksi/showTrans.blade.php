@extends('admin/layouts/admin')

@section('title', 'Admin | Data Les | CariGuru.com')

@section ('container')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard Admin</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard_guru')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Les</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-6 col-4">
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
                        <div class="card-header" style="color: white; font-size:20px; background-color:gray">
                            <i class="fas fa-table mr-1" style="color: white;"></i>
                            Data Les
                        </div>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Nama Pemesan</th>
                                        <th class="border-top-0">Total Biaya</th>
                                        <th class="border-top-0">Status Transaksi</th>
                                        <th class="border-top-0">Tanggal Konfirmasi</th>
                                        <th class="border-top-0">Bukti Transfer</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($dataLes as $a)
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$a->nama}}</td>
                                        <td>@currency($a->total)</td>
                                        <td>{{$a->status_detail}}</td>
                                        <td>{{$a->updated_at}}</td>
                                        <td>
                                            <a href="{{ url('/berkasBayar/'. $a->bukti) }}" data-fancybox="gal">
                                                <img src="{{ url('/berkasBayar/'. $a->bukti) }}" alt="Image" class="img-fluid" width="150px" height="100px">
                                            </a>
                                        </td>
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

@endsection