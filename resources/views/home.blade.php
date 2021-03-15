@extends('landing/layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard CariGuru.com') }}</div>

                <body>
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
                    <div class="card-body">
                        {{ __('Selamat, Kamu Sudah Terdaftar Dan Login!') }}
                        if(){
                            
                        }
                        <a href="dashboardvolunteer">Dashboard</a>
                        <a href="/logout" class="btn btn-primary btn-lg">Logout</a>
                    </div>
                </body>
            </div>
        </div>
    </div>
</div>

@endsection