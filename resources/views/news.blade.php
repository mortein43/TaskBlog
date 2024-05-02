@extends('layouts.app')

@section('title')
    News
@endsection

@section('content')
        <h1>News</h1>
        <div class="d-flex justify-content-between">
            <a href="{{route('addNew')}}" class="btn btn-primary">Add New</a>
            <p class="text-primary">Hello: {{ session('email') }}</p>
        </div>

            <h2 class="text-center">News List</h2>
            <div>
                @foreach($news as $item)
                    <h3 class="pt-3" style="color: blue; border-top: solid 1px black;">{{ $item->summary }}</h3>
                    <p style="color: #86acba;">{{ $item->short_description }}</p>
                    <a href="{{route('news-data-one', $item->id)}}" class="btn btn-primary mb-3">More</a>
                @endforeach
            </div>

@endsection
