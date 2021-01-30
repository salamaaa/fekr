@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-gray-500 text-3xl">
                Create New User
            </h1>
        </div>
        <div class="panel-body">
            <form action="/admin/users/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name"> Username </label>
                    <input type="text" name="name" id="name" class="form-control">
                    <span style="color: red">@error('name') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" name="email" id="email" class="form-control">
                    <span style="color: red">@error('email') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span style="color: red">@error('password') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="avatar">Featured Image</label>
                    <input type="file" name="avatar" id="avatar" class="form-control">
                    <span style="color: red">@error('avatar') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" id="about" cols="5" rows="5" class="form-control"></textarea>
                    <span style="color: red">@error('about') {{$message}} @enderror</span>
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
