@extends('guru/layouts/guru')

@section('title', 'Detail Reservasi | Guru | CariGuru.com')

@section ('container')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/guru/dashboard_guru')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Reservasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header" style="color: white; font-size:20px; background-color:gray">
                            <i class="fas fa-table mr-1" style="color: white;"></i>
                            Detail Les
                        </div>
                        <br>
                        <form class="form-horizontal form-material" action="/guru/postUpdateReservasi/{{$reserv->id_trans}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Nama Murid</label>
                                <div class="col-md-12">
                                    <input disabled type="text" class="form-control" value="{{ $reserv->nama}}">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Kelas</label>
                                <div class="col-md-12">
                                    <input disabled type="text" class="form-control" value="{{ $reserv->kelas}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Kebutuhan Murid</label>
                                <div class="col-md-12">
                                    <input disabled type="text" class="form-control" value="{{ $reserv->kebutuhan}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12 mb-0">Alamat Tempat Belajar</label>
                                <div class="col-md-12">
                                    <input disabled type="text" class="form-control" value="{{ $reserv->alamat}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Tanggal Mulai yang diajukan</label>
                                <div class="col-md-12">
                                    <input disabled class="form-control" value="{{ $reserv->tanggal_mulai }}"></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Jam Belajar yang diajukan</label>
                                <div class="col-md-12">
                                    <input disabled class="form-control" value="{{ $reserv->jam }}"></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Konfirmasi Permintaan Reservasi</label>
                                <div class="col-md-12">
                                    <select name="status" class="form-control">
                                        <option>{{$reserv->status}}</option>
                                        <option value="Diterima">Diterima</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 mb-0">Alasan (* Diisi hanya apabila reservasi ditolak)</label>
                                <div class="col-md-12">
                                    <textarea name="alasan" cols="10" rows="5" class="form-control">{{$reserv->alasan}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Update Reservasi</button>
                                    <a type="button" class="btn btn-danger d-none d-md-inline-block text-white" href="{{route('guru/showReservasi')}}">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection