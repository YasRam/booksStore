@extends('layout.app')

@section('title', 'Add new book')

{{-- {{dd($errors)}} --}}

@section('content')
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('books.edit',$book->id)}}">
        @csrf
        @method('put')
        <div class="form-group row my-1">
            <label for="title" class="col-sm-2 col-form-label">Book Title</label>
            <div class="col-sm-10">
                <input type="title"  class="form-control" id="title" value={{old('title') ?? $book->title}} placeholder="Book Title" name="title">
            </div>
        </div>
        
        <div class="form-group row my-1">
            <label for="auther" class="col-sm-2 col-form-label">Auther</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="authername">
                    <option value="">Open this select menu</option>
                    <option value="1" @if($book->authername == 1) selected @endif>ahmed</option>
                    <option value="2" @if($book->authername == 2) selected @endif>ali</option>
                    <option value="3" @if($book->authername == 3) selected @endif>may</option>
                </select>
            </div>

        </div>


        <div class="form-group row my-1">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>
@endsection