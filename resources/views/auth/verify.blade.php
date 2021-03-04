@extends('landing.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Akun Email mu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Link Verifikasi terbaru sudah kami kirim ke email mu.') }}
                    </div>
                    @endif

                    {{ __('Sebelum ke tahap berikutnya, silahkan cek email anda untuk link verifikasi.') }}
                    {{ __('Jika kamu tidak mendapatkannya, klik link berikut') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik di sini untuk link lainnya ') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection