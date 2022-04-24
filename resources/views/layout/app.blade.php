<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ secure_asset('asset/css/bootstrap.css') }} ">
    <link rel="stylesheet" href="{{ secure_asset('asset/css/list-groups.css') }} ">
    <title>TestBlog</title>
    <style>
        body {
  min-height: 75rem;
  padding-top: 4.5rem;
}
    </style>
</head>
<body>

    @include('inc.nav')
    @if (Route::is('/'))
        @include('inc.showjumbo')
    @endif
    {{-- @include('inc.message') --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>


</body>

<script src="{{ secure_asset('asset/js/boostrap.js') }}"></script>
<script src="{{ secure_asset('asset/js/jquery.js') }}"></script>
</html>
