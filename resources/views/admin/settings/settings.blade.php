@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="text-gray-500 text-3xl">
                Update Fekr Settings
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('settings.update')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name"> Site's name </label>
                    <input type="text" name="site_name" id="name" class="form-control" value="{{$setting->site_name}}">
                    <span style="color: red">@error('site_name') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="number"> Contact Number </label>
                    <input type="number" name="contact_number" id="number" class="form-control"value="{{$setting->contact_number}}">
                    <span style="color: red">@error('contact_number') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="email"> Contact Email </label>
                    <input type="email" name="contact_email" id="email" class="form-control" value="{{$setting->contact_email}}">
                    <span style="color: red">@error('contact_email') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <label for="address"> Address </label>
                    <input type="address" name="address" id="address" class="form-control" value="{{$setting->address}}">
                    <span style="color: red">@error('address') {{$message}} @enderror</span><br>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
