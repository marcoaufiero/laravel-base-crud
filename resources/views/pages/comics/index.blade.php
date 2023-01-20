@extends('layouts.app')

@section('page-title', 'Comics - List')

@section('main-content')
    <h1>Comics List</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

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
                <th scope="col">Actions</th>
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
                    <td>
                        <form action="{{route('comics.destroy', $elem->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark" type="submit">
                                <i class="fa-solid fa-xmark text-danger"></i>
                            </button>
                        </form>
                        <div>
                            <a href="{{route('comics.edit', $elem->id)}}">
                                <button class="btn btn-dark">
                                    <i class="fa-solid fa-pen text-primary"></i>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
    
        </tbody>
    </table>
    
         {{ $comics->links() }}
@endsection