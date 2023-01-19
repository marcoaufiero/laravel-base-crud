@extends('layouts.app')

@section('page-title', 'Comics - List')

@section('main-content')
    <h1>Comics List</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">title</th>
                <th scope="col" colspan="6">description</th>
                <th scope="col">thumb</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale date</th>
                <th scope="col">type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $elem)
                <tr>
                    <td>{{$elem->id}}</td>
                    <td>
                        <a href="#">
                            {{$elem->title}}
                        </a>
                    </td>
                    <td colspan="6">{!!$elem->description!!}</td>
                    <td><img src="{{$elem->thumb}}" alt=""></td>
                    <td>{{$elem->price}}</td>
                    <td>{{$elem->series}}</td>
                    <td>{{$elem->sale_date}}</td>
                    <td>{{$elem->type}}</td>
                </tr>
            @endforeach
    
        </tbody>
    </table>
    
        {{-- {{ $pastas->links() }} --}}
@endsection