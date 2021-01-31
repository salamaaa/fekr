@extends('layouts.app')

@section('content')
    @if(session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-gray-500 text-3xl">
                Edit Profile
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('user.update.profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name"> Username </label>
                    <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
                    <span style="color: red">@error('name') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" name="email" value="{{$user->email}}" id="email" class="form-control">
                    <span style="color: red">@error('email') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="password">New Password </label>
                    <input type="password" name="password" id="password" class="form-control">
                    <span style="color: red">@error('password') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="avatar"> Upload New Avatar </label>
                    <input type="file" name="avatar" id="avatar" class="form-control">
                    <span style="color: red">@error('avatar') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="facebook"> Facebook link </label>
                    <input type="text" name="facebook" id="facebook" value="{{$user->profile->facebook}}" class="form-control">
                    <span style="color: red">@error('facebook') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="twitter"> Twitter link </label>
                    <input type="text" name="twitter" id="twitter" value="{{$user->profile->twitter}}" class="form-control">
                    <span style="color: red">@error('twitter') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="about">Bio</label>
                    <textarea name="about" id="about" cols="5" rows="5" class="form-control">{{$user->profile->about}}</textarea>
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

    @include('sweetalert::alert')
@endsection
