@extends('guru/layouts/guru')

@section('title', 'Tingkat dan Subjek | CariGuru.com')

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
                            <li class="breadcrumb-item active" aria-current="page">Tingkat dan Subjek</li>
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
                            Tambah Tingkat
                        </div>
                        <form action="/guru/tambahTingkatLes" method="POST">
                            {{csrf_field()}}
                            <div class="form-group alert-up-pd">
                                <div class="form-group">
                                    <label for="">Tingkat</label>
                                    <input name="tingkat" type="text" class="form-control @error('tingkat') is-invalid @enderror">
                                    @error('tingkat')<div class="invalid-feedback">{{$message}}</div> @enderror
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
                            Data Tingkat <p style="font-size: medium;">(Tingkatan yang akan diajar oleh Guru. Misal : Sekolah Dasar )</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Tingkat</th>
                                        <th class="border-top-0">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($tingkat as $data )
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$data->tingkat}}</td>
                                        <td>
                                            <a href="/guru/hapusTingkatLes/{{$data->id_tingkat}}" class="btn btn-danger">Hapus</a>
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

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header" style="font-size:20px;">
                            <i class="fas fa-table mr-1"></i>
                            Tambah Subjek
                        </div>
                        <form action="/guru/tambahSubjekLes" method="POST">
                            {{csrf_field()}}
                            <div class="form-group alert-up-pd">
                                <div class="form-group">
                                    <label for=""> Subjek Les</label>
                                    <input name="subjek" type="text" class="form-control @error('subjek') is-invalid @enderror">
                                    @error('subjek')<div class="invalid-feedback">{{$message}}</div> @enderror
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
                            Data Subjek <p style="font-size: medium;">(Subjek yang akan diajarkan oleh Guru. Misal : Matematika )</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table user-table no-wrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Subjek yang diajarkan</th>
                                        <th class="border-top-0">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($subjek as $data )
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$data->subjek}}</td>
                                        <td>
                                            <a href="/guru/hapusSubjekLes/{{$data->id_subjek}}" class="btn btn-danger">Hapus</a>
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