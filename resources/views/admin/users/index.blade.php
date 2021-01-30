@extends('layouts.app')

@section('content')

    @if(session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    @if($users->count() > 0)
        <h1 class="text-gray-500 text-3xl">Users</h1>
        <table class="table table-hover">
            <thead>
            <th>Image</th>
            <th>Name</th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><img src="{{asset($user->profile->avatar)}}" alt="{{$user->name}}" width="50px" height="50px"></td>
                    <td>{{$user->name}}</td>
                    <td>
                        {{--<a class="btn btn-xs btn-info"
                           href="{{route('users.edit',[$user->id])}}">--}}
                            Permissions
{{--                        </a>--}}
                    </td>
                    <td>{{--<a class="btn btn-xs btn-danger"
                           href="{{route('users.destroy',[$user->id])}}">--}}
                            Delete
{{--                        </a>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1 class="text-gray-500 text-center text-3xl">No Users</h1>
    @endif


    @include('sweetalert::alert')
@endsection
