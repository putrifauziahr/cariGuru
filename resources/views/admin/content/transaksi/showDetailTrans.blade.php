@extends('admin/layouts/admin')

@section('title', 'Admin | Detail Transaksi | CariGuru.com')

@section ('container')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard Admin</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard_admin')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Transaksi</li>
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
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header" style="color: white; font-size:20px; background-color:gray">
                            <i class="fas fa-table mr-1" style="color: white;"></i>
                            Bukti Pembayaran
                        </div>
                        <br>
                        <br>
                        <center>
                            <a href="{{ url('/berkasBayar/'. $trans->bukti) }}" data-fancybox="gal">
                                <img src="{{ url('/berkasBayar/'. $trans->bukti) }}" alt="Image" class="img-fluid">
                            </a>
                        </center>
                    </div>
                </div>
            </div>


            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header" style="color: white; font-size:20px; background-color:gray">
                        <i class="fas fa-table mr-1" style="color: white;"></i>
                        Data Detail Transaksi
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form class="form-horizontal form-material" action="/admin/updateDetailTrans/{{$trans->id_detail}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @foreach($transs as $a)
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Nama Pemesan</label>
                                    <div class="col-md-12">
                                        <input disabled type="text" class="form-control" value="{{ $a->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Judul</label>
                                    <div class="col-md-12">
                                        <input disabled type="text" class="form-control" value="{{ $a->judul}}">
                                    </div>
                                </div>
                                @foreach($guru as $g)
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Nama Guru</label>
                                    <div class="col-md-12">
                                        <input disabled type="text" class="form-control" value="{{ $g->name}}">
                                    </div>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Konfirmasi Pembayaran</label>
                                    <div class="col-md-12">
                                        <select name="status_detail" class="form-control">
                                            <option>{{$trans->status_detail}}</option>
                                            <option value="Berhasil">Berhasil</option>
                                            <option value="Gagal">Gagal</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success mx-auto mx-md-0 text-white">Update Transaksi</button>
                                        <a type="button" class="btn btn-danger d-none d-md-inline-block text-white" href="{{route('admin/showDataTrans')}}">Back</a>
                                    </div>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection