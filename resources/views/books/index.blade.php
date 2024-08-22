@extends('layout/app')
@section('title', 'All books')

@section('content')

<x-bread currentpage='Book' />

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">auther</th>
            <th scope="col">detailes</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </tr>
    </thead>
    <tbody>
{{-- {{$i=0}} --}}
        @foreach ($data as $item)


        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->authername}}</td>
            <td><a href="{{ route('book.show' , $item->id) }}" class="btn btn-success">detailes</a></td>
            <td><a href="{{ route('books.update' , $item->id) }}" class="btn btn-warning">edit</a></td>
            <td><a href="{{ route('books.delete' , $item->id) }}" class="btn btn-danger">delete</a></td>
        </tr>
        @endforeach

    </tbody>
</table>

<a href="{{route('books.add')}}" class="btn btn-primary">Add New Book</a>

<div class="d-flex justify-content-center">{{$data->render()}}</div>

@endsection