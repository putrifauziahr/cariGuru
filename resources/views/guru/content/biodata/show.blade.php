@extends('guru/layouts/guru')

@section('title', 'Biodata Guru | CariGuru.com')

@section ('container')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard_guru')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Biodata</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-md-6 col-4">
            <div class="row">
                <a href="{{url('guru/createBiodata')}}" class="btn btn-success d-none d-md-inline-block text-white" target="_blank">
                    Isi Biodata
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class="m-t-30"> <img src="{{ url('/fotoProfil/'. Auth::user()->image) }}" class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                            <h6 class="card-subtitle">Guru</h6>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="/guru/editBiodata" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @foreach($tampilkan_data as $a )
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Pekerjaan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control pl-0 form-control-line" name="pekerjaan" value="{{ $a->pekerjaan}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Kualifikasi / Bidang Keahlian</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control pl-0 form-control-line" name="keahlian" value="{{ $a->keahlian}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Pengalaman</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control pl-0 form-control-line" name="pengalaman" value="{{ $a->pengalaman}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Riwayat Pendidikan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control pl-0 form-control-line" name="sekolah" value="{{ $a->sekolah}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Deskripsi Diri</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control pl-0 form-control-line" name="deskripsi" value="{{ $a->deskripsi }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Berkas Pendukung</label>
                                <div class="col-md-12">
                                    <img width="200px" src="{{ url('/berkasBiodata/'.$a->image) }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">
                                        Update Biodata</button>
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