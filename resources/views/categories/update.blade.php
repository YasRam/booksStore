@extends('layout.app')
@section('title', 'Categories')
@section('content')

{{-- {{dd($errors)}} --}}
@if($errors->any())

@foreach ($errors->all() as $error)
<ul>
    <li>{{$error}}</li>
</ul>
@endforeach

@endif

<form method="POST" action="{{route('categories.edit',$category)}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value={{old('name') ?? $category->name}} class="form-control" id="name" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea name="desc" class="form-control" id="desc" rows="2">{{old('desc') ?? $category->desc}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Add new category</button>
    {{-- <input type="submit" class="btn btn-primary" value="Add new category"> --}}

</form>

@endsection