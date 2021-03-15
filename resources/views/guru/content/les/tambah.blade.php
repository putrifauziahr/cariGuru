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
                            <li class="breadcrumb-item active" aria-current="page">Tambah Les</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="card-header" style="color: black; font-size:20px">
                        <i class="fas fa-table mr-1"></i>
                        Tambah Les
                    </div>

                    <form method="POST" action="/guru/postTambahLes" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <br>
                        <br>
                        <div class="card">
                            <label style="color: black; font-size:15px;">Judul Les</label>
                            <textarea name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukan Judul" value="{{ old ('judul')}}"></textarea>
                            @error('judul')<div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>

                        <div class="card">
                            <label style="color: black; font-size:15px;">Hari Les</label>
                            <select name="hari" id="hari" class="form-control">
                                <option value="pilih">Pilih</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                            </select>
                        </div>

                        <div class="card">
                            <label style="color: black; font-size:15px;">Jam Les</label>
                            <input name="jam" class="form-control @error('jam') is-invalid @enderror" placeholder="Masukan Jam Les" value="{{ old ('jam')}}"></input>
                            @error('jam')<div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>

                        <div class="card">
                            <label style="color: black; font-size:15px;">Sasaran Murid</label>
                            <select name="sasaran" id="sasaran" class="form-control">
                                <option value="pilih">Pilih</option>
                                <option value="paud">Anak Usia PAUD</option>
                                <option value="tk">Anak Usia TK</option>
                                <option value="sd">SD</option>
                                <option value="smp">SMP</option>
                                <option value="sma">SMA</option>
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="umum">Masyarakat Umum</option>
                            </select>
                        </div>

                        <div class="card">
                            <label style="color: black; font-size:15px;">Kelas Sasaran Murid</label>
                            <input name="kelas" class="form-control @error('kelas') is-invalid @enderror" placeholder="Masukan Kelas Sasaran Murid"></input>
                            @error('kelas')<div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>

                        <div class="card">
                            <label style="color: black; font-size:15px;">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Masukan Deskripsi Les. Misal : Silabus Pembelajaran, Pencapaian setiap pertemuan dll"></textarea>
                            @error('deskripsi')<div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>

                        <div class="card">
                            <label style="color: black; font-size:15px;">Tanggal Mulai</label>
                            <input name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror" placeholder="Masukan Tanggal Mulai Pembelajaran"></input>
                            @error('tanggal_mulai')<div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>

                        <div class="card">
                            <label style="color: black; font-size:15px;">Biaya / Pertemuan</label>
                            <input name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Masukan Biaya / Pertemuan"></input>
                            @error('harga')<div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>

                        <div class="card">
                            <label style="color: black; font-size:15px;">Sertifikat / File Pendukung</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" placeholder="Masukan Gambar Pendukung" value="{{ old ('file')}}">
                            @error('file')<div class="invalid-feedback">{{$file}}</div> @enderror
                        </div>

                        <div class="card-body">
                            <button type="submit" class="btn btn-success d-none d-md-inline-block text-white">Submit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection