@extends('layouts.admin')

@section('content')

<div class="container d-flex flex-column justify-content-center text-center mt-3">
    <img class="img-fluid" src="{{$post->cover}}" alt="{{$post->title}}">
    <div class="post-data px-4">
        <h1>{{$post->title}}</h1>
        <div class="body">
            {{$post->body}}
        </div>
    </div>
</div>

@endsection