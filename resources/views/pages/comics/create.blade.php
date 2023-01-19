@extends('layouts.app')

@section('page-title', 'Comics - Create')

@section('main-content')
    <h1 class="text-center">Add New Comic</h1>

<form method="POST" action="{{route('comics.store')}}">

    @csrf

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" id=""></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Image</label>
        <input name="thumb" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input name="price" type="number" step=".01" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Series</label>
        <input name="series" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Sale Date</label>
        <input name="sale_date" type="date" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Type</label>
        <input name="type" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-light">Create</button>
</form>
@endsection