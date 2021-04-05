@extends('layout.app')

@section('content')
<div class="col-12">
    <h1 class="text-center">Hallo {{ $user->name }}!</h1>
</div>
<div class="row">
    <div class="d-flex justify-content-center mt-5">
        <div class="btn-group" role="group">
            <a href="#" onclick="document.querySelector('#tfa-form').submit()" class="btn btn-outline-primary">Enable Two-Factor Authentication</a>
            <form method="post" action="/user/two-factor-authentication" id="tfa-form">
                @csrf
            </form>
            <a href="#" onclick="document.querySelector('#logout-form').submit()" class="btn btn-outline-dark">Logout</a>
            <form method="post" action="/logout" id="logout-form">
                @csrf
            </form>
        </div>
    </div>

    <div class="d-inline-flex justify-content-center flex-column mt-3">
        @if (session('status') == 'two-factor-authentication-enabled')
        <div class="text-center mb-3">
            {!! $user->twoFactorQrCodeSvg() !!}
        </div>

        <ul class="list-group">
            @foreach ( $user->recoveryCodes() as $recoveryCode )
            <li class="list-group-item">{{ $recoveryCode }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="text-center mt-3">
        <a href="/user" class="btn btn-danger">User Management</a>
        <a href="/item" class="btn btn-warning">Item Management</a>
    </div>
</div>
@endsection
