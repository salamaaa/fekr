@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-gray-500 text-3xl">
                Create New Post
            </h1>
        </div>
        <div class="panel-body">
            <form action="/admin/posts/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                    <span style="color: red">@error('title') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="featured_img">Featured Image</label>
                    <input type="file" name="featured_img" id="featured_img" class="form-control">
                    <span style="color: red">@error('featured_img') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="post_content" id="content" cols="5" rows="5" class="form-control"></textarea>
                    <span style="color: red">@error('post_content') {{$message}} @enderror</span>
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
