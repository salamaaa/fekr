<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{$title}}</title>
    @include('includes.links')
    <style>
        .padded-50 {
            padding: 40px;
        }

        .text-center {
            text-align: center;
        }
    </style>

</head>


<body class=" ">

<div class="content-wrapper">
    @include('includes.header')
    <div class="header-spacer"></div>
    @include('includes.container')
    @include('includes.container_fluid')

    <!-- Subscribe Form -->
    @include('includes.subscribe_form')
    <!-- End Subscribe Form -->
</div>


    <!-- Footer -->

    @include('includes.footer')

    <!-- End Footer -->

    @include('includes.svg_part')

    <!-- Overlay Search -->

    @include('includes.overlay_search')

    <!-- End Overlay Search -->

    <!-- JS Script -->
    @include('includes.scripts')
    <!-- ...end JS Script -->

</body>
</html>
