@extends('layout.app')

@section('content')
<h1 class="text-center">
    @isset ($item)
        Edit {{ $item->name }}
    @else
        Create new item
    @endisset
</h1>
<form method="POST" @isset($item)action="/item/{{ $item->id }}"@else action="/item" @endisset>
    @csrf
    @isset($item)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" @isset($item)value="{{ $item->name }}"@endisset>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">@isset($item){{ $item->description }}@endisset</textarea>
        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
