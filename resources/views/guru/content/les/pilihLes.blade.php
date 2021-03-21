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
                <legend>Pilih Mata Kuliah yang akan diambil</legend>
                <form action="/guru/postPilihLes" method="POST">
                    <div class="row">
                        <div class="col-md-5 pr-1" style="display:none;">
                            <div class="form-group">
                                <label for="InputId">ID User</label>
                                <input name="id" class="form-control @error('id') is-invalid @enderror" type="hidden" id="InputNama" value="{{Auth::user()->id}}">
                                @error('id')<div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="InputNama">Nama Dosen</label>
                                <input name="name" class="form-control @error('name') is-invalid @enderror" disabled id="InputNama" value="{{Auth::user()->name}}">
                                @error('name')<div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>
                    </div>
                    {{ csrf_field()}}
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <label for="nama_matkul">TINGKAT </label>
                            <br>
                            @foreach ($tingkat as $t)
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="id_tingkat[]" value="<?= $t->id_tingkat; ?>">
                            (<?= $t->id_tingkat ?>) <?= $t->tingkat; ?>
                            <br>
                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <label for="nama_matkul">TARIF</label>
                            <br>
                            @foreach ($tarif as $ta)
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="id_tarif[]" value="<?= $ta->id_tarif; ?>">
                            (<?= $ta->id_tarif ?>) (<?= $ta->pertemuan; ?>) (<?= $ta->nama; ?>) <?= $ta->tarif; ?>
                            <br>
                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <label for="nama_matkul">SUBJEK </label>
                            <br>
                            @foreach ($subjek as $t)
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="id_subjek[]" value="<?= $t->id_subjek; ?>">
                            (<?= $t->id_subjek ?>) <?= $t->subjek; ?>
                            <br>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection