@extends('landing/layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard CariGuru.com') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Selamat, Kamu sudah Login!') }}
                    <p>Hallo, {{Session::get('name')}}. Apakabar?</p>

                    <h2>* Email kamu : {{ Auth::user()->email }}</h2>
                    <h2>* Nama : {{ Auth::user()->name }}</h2>
                    <a href="/logout" class="btn btn-primary btn-lg">Logout</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection