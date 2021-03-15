@extends('guru/layouts/guru')

@section('title', 'Les Guru | CariGuru.com')

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
                            <li class="breadcrumb-item active" aria-current="page">Les</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-6 col-4">
            <div class="row">
                <a href="{{url('guru/tambahLes')}}" class="btn btn-success d-none d-md-inline-block text-white" data-target="TambahDataLes">
                    Tambah Les
                </a>
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
                        <h4 class="card-title">Tabel Les</h4>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Judul</th>
                                        <th class="border-top-0">Tanggal Mulai</th>
                                        <th class="border-top-0">Hari Les</th>
                                        <th class="border-top-0">Waktu Les</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($tampilkan_data as $a )
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$a->judul}}</td>
                                        <td>{{$a->tanggal_mulai}}</td>
                                        <td>{{$a->hari}}</td>
                                        <td>{{$a->jam}}</td>
                                        <td>
                                            <button class="btn btn-primary"><a href="/guru/showDetailLes/{{$a->id_les}}" style="color: white;">Detail</a></button>
                                            <button class="btn btn-danger"><a href="/guru/hapusLes/{{$a->id_les}}" style="color: white;">Hapus</a></button>
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