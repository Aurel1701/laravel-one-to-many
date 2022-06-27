@extends('layouts.admin')

@section('content')

<h2>Create new Post</h2>
@include('partials.errors')
<form action="{{route('admin.posts.store')}}" method="post">
    @csrf
    <div class="mb-4">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert Title" value="{{old('title')}}">
    </div>

    <div class="mb-4">
        <label for="excerpt" class="form-label me-2">excerpt</label>
        <input type="text" name="excerpt" id="excerpt" class="form-control  @error('cover') is-invalid @enderror" placeholder="Insert excerpt" value="{{old('excerpt')}}">
    </div>
    
    <div class="mb-4">
        <label for="cover" class="form-label me-2">cover</label>
        <input type="text" name="cover" id="cover" class="form-control  @error('cover') is-invalid @enderror" placeholder="Insert cover" value="{{old('cover')}}">
    </div>
   
    <div class="mb-4">
        <label for="body">Body</label>
        <textarea class="form-control  @error('body') is-invalid @enderror" name="body" id="body" rows="4">
        {{old('content')}}
        </textarea>
    </div>
    <div class="mb-4">
        <label for="author" class="form-label me-2">author</label>
        <input type="text" name="author" id="author" class="form-control  @error('cover') is-invalid @enderror" placeholder="Insert cover" value="{{old('author')}}">
    </div>

    <button type="submit" class="btn btn-primary">Add Post</button>


</form>

@endsection