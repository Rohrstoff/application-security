@extends('layout.app')

@section('content')
<h1 class="text-center">Two Factor Check</h1>
<div class="d-flex justify-content-center">
    <div class="card text-dark bg-light mb-3">
        <div class="card-body">
            <form method="post" action="/two-factor-challenge">
                @csrf
                <div class="mb-3">
                    <label for="code" class="form-label">Two-Factor Code</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>
                <div class="mb-3">
                    <label for="recovery_code" class="form-label">Recovery Code</label>
                    <input type="text" class="form-control" id="recovery_code" name="recovery_code">
                </div>
                <button type="submit" class="btn btn-primary">Verify</button>
            </form>
        </div>
    </div>
</div>
@endsection
