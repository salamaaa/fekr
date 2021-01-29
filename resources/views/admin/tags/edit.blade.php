@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-gray-500 text-3xl">
                Edit "{{$tag->tag}}" Tag
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('tags.update',[$tag->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" id="tag" class="form-control" value="{{$tag->tag}}">
                    <span style="color: red">@error('tag') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
