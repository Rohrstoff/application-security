@extends('layout.app')

@section('content')
<h1 class="text-center">M183 Example</h1>
<div class="row">
    <div class="card text-dark bg-light mb-3 col-6">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form method="post" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="email-login" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email-login" name="email">
                </div>
                <div class="mb-3">
                    <label for="password-login" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password-login" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    <div class="card text-dark bg-light mb-3 col-6">
        <div class="card-body">
            <h5 class="card-title">Register</h5>
            <form method="post" action="/register">
                @csrf
                <div class="mb-3">
                    <label for="name-register" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name-register" name="name">
                </div>
                <div class="mb-3">
                    <label for="email-register" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email-register" name="email">
                </div>
                <div class="mb-3">
                    <label for="password-register" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password-register" name="password">
                </div>
                <div class="mb-3">
                    <label for="password-confirmation" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" id="password-confirmation" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
