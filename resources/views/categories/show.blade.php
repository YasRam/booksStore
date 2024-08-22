@extends('layout.app')
@section('title', 'Categories')
@section('content')
<h1>{{$category->name}}</h1>
<p>{{$category->desc}}</p>
<td><a href="{{route('categories.update',$category)}}" class="btn btn-warning">update</a></td>
<td><a href="{{route('categories.destroy',$category)}}" class="btn btn-danger">delete</a></td>
<a href="{{route('categories.all')}}" class="btn btn-dark">Back</a>
@endsection