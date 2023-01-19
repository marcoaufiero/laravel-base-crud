@extends('layouts.app')

@section('page-title', 'Comics - List')

@section('main-content')
    <h1>Comics List</h1>
    <div>
        <a href="{{route('comics.create')}}">
            <button type="button" class="btn btn-light">Add New Comic</button>
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Title</th>
                <th scope="col" colspan="6">Description</th>
                <th scope="col">Picture</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $elem)
                <tr>
                    <td>{{$elem->id}}</td>
                    <td>
                        <a href="{{route('comics.show', $elem->id)}}">
                            {{$elem->title}}
                        </a>
                    </td>
                    <td colspan="6">{!!$elem->description!!}</td>
                    <td><img src="{{$elem->thumb}}" alt=""></td>
                    <td>${{$elem->price}}</td>
                    <td>{{$elem->series}}</td>
                    <td>{{$elem->sale_date}}</td>
                    <td>{{$elem->type}}</td>
                </tr>
            @endforeach
    
        </tbody>
    </table>
    
         {{ $comics->links() }}
@endsection