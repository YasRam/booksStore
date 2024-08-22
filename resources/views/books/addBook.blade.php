@extends('layout.app')
@section('title', 'Add new book')
@section('content')
@if($errors->any())
{{-- {{dd($errors)}} --}}
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>

@endif
@include('layout.bookform')
@endsection