@extends('layouts.app')

@section('content')

    @if(session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    @if($posts->count() > 0)
        <h1 class="text-gray-500 text-3xl">Posts</h1>
        <table class="table table-hover">
            <thead>
            <th>Image</th>
            <th>Title</th>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="50px" height="50px"></td>
                    <td>{{$post->title}}</td>
                    <td>
                        <a class="btn btn-xs btn-info"
                           href="{{route('posts.edit',[$post->id])}}">
                            Edit
                        </a>
                    </td>
                    <td><a class="btn btn-xs btn-danger"
                           href="{{route('posts.destroy',[$post->id])}}">
                            Trash
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1 class="text-gray-500 text-center text-3xl">No Posts</h1>
    @endif


    @include('sweetalert::alert')
@endsection
