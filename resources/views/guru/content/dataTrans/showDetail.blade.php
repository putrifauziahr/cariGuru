@extends('guru/layouts/guru')

@section('title', 'Data Transaksi | CariGuru.com')

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
                            <li class="breadcrumb-item active" aria-current="page">Data Detail Transaksi</li>
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
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header" style="color: white; font-size:20px; background-color:gray">
                            <i class="fas fa-table mr-1" style="color: white;"></i>
                            Detail Les
                        </div>
                        <br>
                        @foreach($data2 as $d)
                        <form class="form-horizontal form-material" action="/guru/updateDataTrans/{{$data->id_detail}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Nama Pemesan</label>
                                <div class="col-md-12">
                                    <input disabled type="text" class="form-control" value="{{ $d->nama}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Judul Les</label>
                                <div class="col-md-12">
                                    <input disabled type="text" class="form-control" value="{{ $d->judul}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Status Transfer Admin</label>
                                <div class="col-md-12">
                                    <select name="status_bukti" class="form-control">
                                        <option>{{ $data->status_bukti}}</option>
                                        <option value="Sukses">Sukses</option>
                                        <option value="Belum Terkirim">Belum Terkirim</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Ubah</button>
                                    <a type="button" class="btn btn-danger d-none d-md-inline-block text-white" href="{{route('guru/showDataTrans')}}">Back</a>
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


@endsection