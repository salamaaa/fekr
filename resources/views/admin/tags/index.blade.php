@extends('layouts.app')

@section('content')

    @if(session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    @if($tags->count() > 0)
        <h1 class="text-gray-500 text-3xl">Tags</h1>
        <table class="table table-hover">
            <thead>
            <th>Name</th>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{$tag->tag}}</td>
                    <td>
                        <a class="btn btn-xs btn-info"
                           href="{{route('tags.edit',[$tag->id])}}">
                            Edit
                        </a>
                    </td>
                    <td><a class="btn btn-xs btn-danger"
                           href="{{route('tags.destroy',[$tag->id])}}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1 class="text-gray-500 text-center text-3xl">No Tags</h1>
    @endif
    @include('sweetalert::alert')
@endsection
