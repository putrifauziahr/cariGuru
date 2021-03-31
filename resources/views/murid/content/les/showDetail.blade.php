@extends('murid/layouts/murid')

@section('title', 'Data Les | CariGuru.com')

@section ('container')
<br>
<br>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title text-center"><strong style="font-size: 25px;">Data Les</strong></h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="productinfo text-center">
                        <center class="m-t-30">

                            @foreach($guru as $g)
                            <a href="{{ url('/fotoProfil/'. $g->image) }}" data-fancybox="gal">
                                @if($g->image != null)
                                <img src="{{ url('/fotoProfil/'. $g->image) }}" alt="Image" class="img-circle" style="height: 180px; width:180px">
                                @else
                                <img src="{{ url('images/user-dummy.png') }}" alt="Image" class="img-circle" style="height: 180px; width:180px">
                                @endif
                            </a>
                            <br>
                            <br>
                            <h4>{{$g->name}}</h4>
                            <p>Guru</p>
                            @endforeach
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <table class="table">
                                        @foreach($transs as $t)
                                        @foreach($guru as $g)
                                        <form action="/murid/postUpdateDataLes/{{$les->id_detail}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <tr>
                                                <th scope="col"> Judul Les
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$t->judul}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Tanggal Mulai
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$t->tanggal_mulai}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Jam Belajar
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$t->waktu}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Kelas
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$t->kelas}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Kebutuhan
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$t->kebutuhan}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Alamat Belajar
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$t->alamat_belajar}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Subjek yang diajarkan
                                                </th>
                                                @foreach($subjek as $s)
                                                <td scope="col" style="text-align: left;">
                                                    {{$s->subjek}}
                                                </td>
                                            <tr></tr>
                                            <th></th>
                                            @endforeach
                                            </tr>
                                            <tr>
                                                <th scope="col"> Jumlah Pertemuan
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$t->pertemuan}} / Bulan
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Deskripsi Les
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$t->deskripsi}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>===================</th>
                                                <td>===================</td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Guru
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$g->name}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col"> Kontak Guru
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$g->kontak}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Alamat Guru
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    {{$g->alamat}}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="col"> Status Belajar
                                                </th>
                                                <td scope="col" style="text-align: left;">
                                                    <select name="status_belajar" class="form-control">
                                                        <option>
                                                            {{$les->status_belajar}}
                                                        </option>
                                                        <option value="Selesai">Selesai</option>
                                                    </select>
                                                </td>
                                            </tr>
                                    </table>
                                    <button type="submit" class="btn btn-success">Ubah Status Belajar</button>
                                    <a href="{{route('murid/showDataLes')}}" class="btn btn-danger" type="button" style="color: white;">Kembali</a>
                                    </form>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection