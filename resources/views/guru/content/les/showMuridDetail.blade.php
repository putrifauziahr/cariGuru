@extends('guru/layouts/guru')

@section('title', 'Guru | Detail Murid Les | CariGuru.com')

@section ('container')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard Guru</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard_guru')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Murid Les</li>
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
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header" style="color: white; font-size:20px; background-color:gray">
                        <i class="fas fa-table mr-1" style="color: white;"></i>
                        Data Detail Murid Les
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <tbody>
                                    <form action="/guru/updateDataMurid/{{$murid->id_detail}}" method="POST">
                                        {{csrf_field()}}
                                        @foreach($transs as $t)
                                        @foreach($guru as $g)

                                        <tr>
                                            <th class="border-top-0">Nama Murid</th>
                                            <td>{{$t -> nama}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Kontak</th>
                                            <td>{{$t -> kontak}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Kelas Murid</th>
                                            <td>{{$t -> kelas}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Kebutuhan</th>
                                            <td>{{$t -> kebutuhan}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Alamat Belajar</th>
                                            <td>{{$t -> alamat_belajar}}</td>
                                        </tr>

                                        <tr>
                                            <th class="border-top-0">Tanggal Pertemuan Pertama</th>
                                            <td>{{$t ->tanggal_mulai}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Jam Belajar</th>
                                            <td>{{$t->waktu}}</td>
                                        </tr>

                                        <tr>
                                            <th class="border-top-0">=====================</th>
                                            <td>======================</td>
                                        </tr>

                                        <tr>
                                            <th class="border-top-0">Judul Les</th>
                                            <td>{{$t -> judul}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Subjek yang diajarkan</th>
                                            @foreach($subjek as $s)
                                            <td>{{$s -> subjek}}</td>
                                        <tr class="border-top-0"></tr>
                                        <td class="border-top-0"></td>
                                        @endforeach
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Jumlah Pertemuan</th>
                                            <td>{{$t -> pertemuan}} / Bulan</td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">Deskripsi Les</th>
                                            <td>{{$t -> deskripsi}}</td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                        <tr>
                                            <th class="border-top-0">Status Belajar</th>
                                            <td>
                                                <select name="status_belajar" class="form-control">
                                                    <option>{{$murid -> status_belajar}}</option>
                                                    <option value="Mulai">Mulai</option>
                                                </select>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-info">Ubah</button>
                            <a href="{{route('guru/showMuridLes')}}" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection