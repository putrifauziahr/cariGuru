@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ url('/registerPost') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="alamat">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Password Confirmation:</label>
                        <input type="password" class="form-control" id="confirmation" name="confirmation">
                    </div>
                    <div class="form-group">
                        <label>Role :</label>
                        <select class="form-control" name="role">
                            <option value="pilih">Pilih</option>
                            <option value="guru">Guru</option>
                            <option value="murid">Murid</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection