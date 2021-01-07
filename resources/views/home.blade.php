@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p style="font-weight: bold; font-size:18px;"> Selamat Anda Berhasil Login! Klik Link Berikut untuk melanjutkan</p>
                    <a href="{{url ('/dashboard_admin')}}">Dashboard Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection