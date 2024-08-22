@extends('layout.app')
@section('title', 'Categories')
@section('content')

<table class="table table-dark table-striped">
  {{-- {{dd($categories)}} --}}
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Desc</th>
      <th scope="col">Details</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  {{-- {{$i=1}} --}}
  @foreach ($categories as $item)
  <tr>

    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$item->name}}</td>
    <td>{{$item->desc}}</td>
    <td><a href="{{route('categories.show',$item->id)}}" class="btn btn-success">details</a></td>
    <td><a href="{{route('categories.update',$item)}}" class="btn btn-warning">update</a></td>
    <td><a href="{{route('categories.destroy',$item)}}" class="btn btn-danger">delete</a></td>
  </tr>
  @endforeach
</table>
<a href="{{route('categories.add')}}" class="btn btn-primary">Add new category</a>

@endsection