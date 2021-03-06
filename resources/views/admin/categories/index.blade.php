@extends('layouts.app')

@section('content')

    @if(session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    @if($categories->count() > 0)
        <h1 class="text-gray-500 text-3xl">Categories</h1>
        <table class="table table-hover">
            <thead>
            <th>Name</th>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>
                        <a class="btn btn-xs btn-info"
                           href="{{route('categories.edit',[$category->id])}}">
                            Edit
                        </a>
                    </td>
                    <td><a class="btn btn-xs btn-danger"
                           href="{{route('categories.destroy',[$category->id])}}">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1 class="text-gray-500 text-center text-3xl">No Categories</h1>
    @endif
    @include('sweetalert::alert')
@endsection
