@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-2/3 mx-auto">
    <h2 class="text-center text-2xl">Upload your dog!</h2>
    <form method="post" action="/pictures" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nameid" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input name="name" type="text" class="form-control" id="nameid" placeholder="Dog Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="imageid" class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
                <input name="image" type="file" id="imageid" class="custom-file-input">
                <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection