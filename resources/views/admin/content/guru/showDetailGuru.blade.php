@extends('admin/layouts/admin')

@section('title', 'Admin | Detail Guru | CariGuru.com')

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
                            <li class="breadcrumb-item active" aria-current="page">Detail Guru</li>
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
                    <div class="card-header" style="color: white; font-size:20px; background-color:gray">
                        <i class="fas fa-table mr-1" style="color: white;"></i>
                        Data Detail Guru
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <tbody>
                                    <tr>
                                        <th class="border-top-0">ID Guru</th>
                                        <td>{{$guru -> id}}</td>
                                    </tr>

                                    <tr>
                                        <th class="border-top-0">Nama</th>
                                        <td>{{$guru->name}}</td>
                                    </tr>

                                    <tr>
                                        <th class="border-top-0">Kontak</th>
                                        <td>{{$guru->kontak}}</td>
                                    </tr>

                                    <tr>
                                        <th class="border-top-0">Email</th>
                                        <td>{{$guru->email}}</td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">Alamat</th>
                                        <td>{{$guru->alamat}}</td>
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
                                        <th class="border-top-0">Tingkat</th>
                                        @foreach($tingkat as $t)
                                        <td>{{$t -> tingkat}} </td>
                                    <tr class="border-top-0"></tr>
                                    <td class="border-top-0"></td>
                                    @endforeach
                                    </tr>


                                    <tr>
                                        <th class="border-top-0">Les</th>
                                        <th class="border-top-0">Judul</th>
                                        <th class="border-top-0">Waktu</th>
                                        <th class="border-top-0">Pertemuan</th>
                                        <th class="border-top-0">Harga</th>
                                        <th class="border-top-0">Dekripsi</th>
                                    <tr class="border-top-0"></tr>
                                    <td class="border-top-0"></td>
                                    @foreach($les as $l)
                                    <td>{{$l -> judul}} </td>
                                    <td>{{$l -> jam}} </td>
                                    <td>{{$l -> pertemuan}} </td>
                                    <td>@currency($l -> harga) </td>
                                    <td>{{$l -> deskripsi}} </td>
                                    <tr class="border-top-0"></tr>
                                    <td class="border-top-0"></td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{route('admin/showDataGuru')}}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection