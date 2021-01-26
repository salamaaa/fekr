@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-gray-500 text-3xl">
                Create New Category
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" id="title" class="form-control" value="{{old('name')}}">
                    <span style="color: red">@error('name') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
