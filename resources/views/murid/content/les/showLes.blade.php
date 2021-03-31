@extends('murid/layouts/murid')

@section('title', 'Data Les | CariGuru.com')

@section ('container')

<br>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center"><strong style="font-size: 25px;">Data Les</strong></h2>
                </div>
            </div>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-info">
                                    <tr>
                                        <th class="border-top-0">No</th>
                                        <th class="border-top-0">Tanggal Mulai Belajar</th>
                                        <th class="border-top-0">Jam Belajar</th>
                                        <th class="border-top-0">Status Belajar</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($les as $a )
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$a->tanggal_mulai}}</td>
                                        <td>{{$a->waktu}}</td>
                                        <td>{{$a->status_belajar}}</td>
                                        <td>
                                            <a href="/murid/showDetailData/{{$a->id_detail}}" class="btn btn-info">Ubah</a>
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
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!--/slider-->
@endsection