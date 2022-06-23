@extends('layouts.admin')

@section('content')

<div class="">
    <div class="d-flex justify-content-between py-4">
        <h1>All Posts</h1>
        <div><a href="{{route('admin.posts.create')}}" class="btn btn-primary">Add Post</a></div>
    </div>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Excerpt</th>
                <th>Cover</th>
                <th>body</th>
                <th>author</th>
            </tr>
        </thead>

        <tbody>
            @forelse($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->excerpt}}</td>
                <td><img width="150" src="{{$post->cover}}" alt="Cover image {{$post->title}}"></td>
                <td>{{$post->body}}</td>
                <td>{{$post->author}}</td>
                <td>
                  <a class="btn btn-primary text-white btn-sm" href="{{route('admin.posts.show', $post->id)}}">View</a>
                  <a class="btn btn-secondary text-white btn-sm" href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
                  
                  <!-- cancel button -->
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-post-{{$post->id}}">
                        Delete
                  </button>
                  <!-- cancel button -->

                  <div class="modal fade" id="delete-post-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$post->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete current</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this post?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


                                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Confirm</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>

            @empty
            <tr>
                <td scope="row">No Posts! Create your first post <a href="#">Create post</a></td>
            </tr>
            @endforelse
        </tbody>
    </table>



@endsection