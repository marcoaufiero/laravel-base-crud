@extends('layouts.app')

@section('page-title', 'Comics - Comic Details')

@section('main-content')
    <h1 class="pb-3">{{$single_comic->title}}</h1>
    @if(session('success'))
    <div class="alert alert-success my-3">
        {{session('success')}}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img class="w-100" src="{{$single_comic->thumb}}" alt="">
            </div>
            <div class="col-6">
                <h3>Description:</h3>
                <p>{!!$single_comic->description!!}</p>
                <h3 class="pb-3">Price: ${{$single_comic->price}}</h3>
                <h4 class="pb-3">Series: {{$single_comic->series}}</h3>
                <h4 class="pb-3">Sale Date: {{$single_comic->sale_date}}</h3>
                <h4 class="pb-3">Type: {{$single_comic->type}}</h3>
            </div>
        </div>
    </div>
    
    
        
    
    
    
@endsection