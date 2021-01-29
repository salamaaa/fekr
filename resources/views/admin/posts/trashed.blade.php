@extends('layouts.app')

@section('content')

    @if(session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    @if($posts->count() > 0)
        <h1 class="text-gray-500 text-3xl">Trashed Posts</h1>
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
                        <a class="btn btn-xs btn-danger"
                           href="{{route('posts.perDelete',[$post->id])}}">
                            Delete
                        </a>
                    </td>
                    <td><a class="btn btn-xs btn-success"
                           href="{{route('posts.restore',[$post->id])}}">
                            Restore
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1 class="text-gray-500 text-center text-3xl">No Trashed Posts</h1>
    @endif


    @include('sweetalert::alert')
@endsection
