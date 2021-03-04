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
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Lengkapi Biodata
                </div>
                <form method="POST" action="/guru/postCreateBiodata" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="card-body">
                        <label>Pekerjaan Saat Ini</label>
                        <textarea name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Masukan Pekerjaan" value="{{ old ('pekerjaan')}}"></textarea>
                        @error('pekerjaan')<div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>

                    <div class="card-body">
                        <label>Kualifikasi / Bidang Kehalian</label>
                        <input type="text" class="form-control @error('keahlian') is-invalid @enderror" name="keahlian" placeholder="Masukan Keahlian" value="{{ old ('keahlian')}}">
                        @error('keahlian')<div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>

                    <div class="card-body">
                        <label>Pengalaman</label>
                        <textarea name="pengalaman" class="form-control @error('pengalaman') is-invalid @enderror" placeholder="Masukan Pengalaman" value="{{ old ('pengalaman')}}"></textarea>
                        @error('pengalaman')<div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>

                    <div class="card-body">
                        <label>Riwayat Pendidikan</label>
                        <textarea name="sekolah" class="form-control @error('sekolah') is-invalid @enderror" placeholder="Masukan Riwayat Pendidikan" value="{{ old ('sekolah')}}"></textarea>
                        @error('sekolah')<div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>

                    <div class="card-body">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>

                        @error('deskripsi')<div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>

                    <div class="card-body">
                        <label for="file">Sertifikat / File Pendukung</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="image" placeholder="Masukan Gambar" value="{{ old ('file')}}">
                        @error('file')<div class="invalid-feedback">{{$file}}</div> @enderror
                    </div>

                    <div class="card-body">
                        <button type="submit" class="btn btn-success d-none d-md-inline-block text-white">Submit</button>
                    </div>
            </div>
            </form>
        </div>
    </div>


    @endsection