@extends('layouts.app')
@section('title')
    Add New
@endsection

@section('content')
        <form action="{{route('addNew')}}" method="post" >
            @csrf
            <div class="d-flex justify-content-between mt-3">
                <label for="header" class="text-primary col-1">Header:</label>
                <input type="text" name="header" id="header" class="form-control">
            </div>
            <div class="d-flex justify-content-between mt-3">
                <label for="short_text" class="text-primary col-1">Short text:</label>
                <input type="text" name="short_text" id="short_text" class="form-control">
            </div>
            <div class="d-flex justify-content-between mt-3">
                <label for="article" class="text-primary col-1">Article:</label>
                <textarea type="text" name="article" id="article" class="form-control" rows="10"></textarea>
            </div>
            <button class="btn btn-primary w-100 mt-3">Add</button>
        </form>
@endsection
