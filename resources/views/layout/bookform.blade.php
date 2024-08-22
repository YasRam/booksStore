<form method="POST" action="{{route('books.store')}}">
    @csrf
    <div class="form-group row my-1">
        <label for="title" class="col-sm-2 col-form-label">Book Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Book Title" name="title">
        </div>
    </div>

    <div class="form-group row my-1">
        <label for="auther" class="col-sm-2 col-form-label">Auther</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name="authername">
                <option selected>Open this select menu</option>
                <option value="1">ahmed</option>
                <option value="2">ali</option>
                <option value="3">may</option>
            </select>
        </div>

    </div>


    <div class="form-group row my-1">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">ADD</button>
        </div>
    </div>
</form>