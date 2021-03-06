@extends('layout.app')

@section('content')
<h1 class="text-center">User Overview</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">E-Mail</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach( $users as $user )
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="/user/{{ $user->id }}" class="btn btn-warning">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
