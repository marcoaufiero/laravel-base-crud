@extends('layouts.app')

@section('page-title', 'Comics - Edit')

@section('main-content')
    <h1 class="text-center">Edit Comic</h1>

<form method="POST" action="{{route('comics.update', $comic->id)}}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input value="{{$comic->title}}" name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" id="">
            {{$comic->description}}
        </textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Image</label>
        <input value="{{$comic->thumb}}" name="thumb" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input value="{{$comic->price}}" name="price" type="number" step=".01" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Series</label>
        <input value="{{$comic->series}}" name="series" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Sale Date</label>
        <input value="{{$comic->sale_date}}" name="sale_date" type="date" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Type</label>
        <input value="{{$comic->type}}" name="type" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-light">Create</button>
</form>
@endsection