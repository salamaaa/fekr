@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-gray-500 text-3xl">
                Create New User
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('users.store')}}" method="post">
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
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
