@extends('layout/app')

{{-- {{dd($data->title)}} --}}

@section('title')
{{$data->title}}
@endsection

@section('content')
book
{{-- @foreach ($data as $item) --}}
<h1>{{$data->title}}</h1>
{{-- @endforeach --}}

<div>
    <a href="{{route('books.update',$data->id)}}" class="btn btn-primary">edit</a>
    <a href="{{route('books.delete',$data->id)}}" class="btn btn-secondary">delete</a>
    <a href="{{route('books.all')}}" class="btn btn-close"></a>
</div>
@endsection