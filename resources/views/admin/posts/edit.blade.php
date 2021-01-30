@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-gray-500 text-3xl">
                Edit "{{$post->title}}" Post
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('posts.update',[$post->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                    <span style="color: red">@error('title') {{$message}} @enderror</span><br>
                </div>


                <div class="form-group">
                    <label for="featured_img">Featured Image</label>
                    <input type="file" name="featured" id="featured_img" class="form-control">
                    <span style="color: red">@error('featured') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="post_content" id="content" cols="5" rows="5"
                              class="form-control">{{$post->content}}</textarea>
                    <span style="color: red">@error('post_content') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                    @if($post->category->id == $category->id)
                                        selected
                                    @endif
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <label for="check">Select Tag(s)</label>
                <div class="form-check" id="check">
                    @foreach($tags as $tag)
                        <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}"
                               id="flexCheckDefault"

                               @foreach($post->tags as $t)
                               @if($tag->id == $t->id)
                               checked
                            @endif

                            @endforeach
                        >
                        <label class="form-check-label" for="flexCheckDefault">
                            {{$tag->tag}}
                        </label>
                        <br>
                    @endforeach
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
