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


<form method="POST" action="{{route('categories.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea name="desc" class="form-control" id="desc" rows="2"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Add new category</button>
    {{-- <input type="submit" class="btn btn-primary" value="Add new category"> --}}

</form>

@endsection