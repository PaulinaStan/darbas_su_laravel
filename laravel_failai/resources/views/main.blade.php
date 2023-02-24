<!DOCTYPE html>
<html lang="en">
<head>
    @csrf
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
</head>    <body>    <div class="main_grid">
    @include('layouts.admin.header')
</div>    <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
            @endif
            @yield('content')
            <br>
            @include('fronteshop.footer')
        </div>
</div>
</body>
</html>
