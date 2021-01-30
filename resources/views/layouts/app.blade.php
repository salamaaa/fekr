<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fekr</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />--}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<x-jet-banner/>

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    {{-- <header class="bg-white shadow">
         <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
             {{ $header }}
         </div>
     </header>--}}
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <ul class="list-group">

                    @if(\Illuminate\Support\Facades\Auth::user()->admin)
                        <li class="list-group-item">
                            <a href="{{route('users.index')}}">Users</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('users.create')}}">Create User</a>
                        </li>
                    @endif
                    <li class="list-group-item">
                        <a href="{{route('posts.index')}}">Posts</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('posts.create')}}">Create Post</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('posts.trashed')}}">Trashed Posts</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('categories.index')}}">Categories</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('categories.create')}}">Create Category</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('tags.index')}}">Tags</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('tags.create')}}">Create Tag</a>
                    </li>



                </ul>
            </div>
            <div class="col-lg-8">
                @yield('content')
            </div>
        </div>
    </div>

    {{--<!-- Page Content -->
    <main>
        {{ $slot }}
    </main>--}}
</div>

{{--  @stack('modals')

  @livewireScripts--}}

{{--
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
--}}

    {{--@if(\Illuminate\Support\Facades\Session::has('success'))
        <script>  toastr.success('{!!\Illuminate\Support\Facades\Session::get('success')!!}'); </script>
        @endif--}}

</body>
</html>
