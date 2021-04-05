@extends('layout.app')

@section('content')
<h1 class="text-center">Item Management</h1>
<a href="/item/create" class="btn btn-warning">New Item</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created by</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach( $items as $item )
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->user->name }}</td>
            <td><a href="/item/{{ $item->id }}" class="btn btn-warning">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
