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
                    <form action="/guru/postTambahLes" method="POST">
                        {{csrf_field()}}
                        <div class="form-group alert-up-pd">
                            <div class="form-group">
                                <label for=""> Judul Les</label>
                                <textarea name="judul" type="text" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for=""> Waktu</label>
                                <input name="jam" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Kelas Murid</label>
                                <input name="kelas" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Deskripsi</label>
                                <textarea name="deskripsi" type="text" class="form-control"> </textarea>
                            </div>
                            <div class="form-group">
                                <label for=""> Jumlah Pertemuan / Bulan</label>
                                <input name="pertemuan" type="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=""> Biaya / Bulan</label>
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
    </div>



    @endsection