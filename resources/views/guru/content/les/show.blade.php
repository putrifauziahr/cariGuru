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
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header" style="font-size:20px;">
                            <i class="fas fa-table mr-1"></i>
                            Tambah Les
                        </div>
                        <form action="/guru/postTambahLes" method="POST">
                            {{csrf_field()}}
                            <div class="form-group alert-up-pd">
                                <div class="form-group">
                                    <label for=""> Judul Les</label>
                                    <textarea name="judul" type="text" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for=""> Waktu (Misal : 120 Menit / Pertemuan)</label>
                                    <input name="jam" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""> Kelas Murid</label>
                                    <input name="kelas" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""> Deskripsi (Silabus, Capaian pembelajaran dll)</label>
                                    <textarea name="deskripsi" type="text" class="form-control"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for=""> Jumlah Pertemuan / Bulan</label>
                                    <input name="pertemuan" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for=""> Biaya / Bulan (Contoh pengisian : 350000)</label>
                                    <input name="harga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 d-flex">
                                        <button class="btn btn-success mx-auto mx-md-0 text-white">
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
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
                                        <th class="border-top-0">Judul</th>
                                        <th class="border-top-0">Waktu</th>
                                        <th class="border-top-0">Kelas</th>
                                        <th class="border-top-0">Deskripsi</th>
                                        <th class="border-top-0">Pertemuan / Bulan</th>
                                        <th class="border-top-0">Biaya / Bulan</th>
                                        <th class="border-top-0">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($tampilkan_data as $a)
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$a->judul}}</td>
                                        <td>{{$a->jam}}</td>
                                        <td>{{$a->kelas}}</td>
                                        <td>{{$a->deskripsi}}</td>
                                        <td>{{$a->pertemuan}}</td>
                                        <td>@currency($a->harga)</td>
                                        <td>
                                            <a href="/guru/showDetailLes/{{$a->id_les}}" class="btn btn-info">Detail</a>
                                            <a href="/guru/hapusLes/{{$a->id_les}}" class="btn btn-danger">Hapus</a>
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