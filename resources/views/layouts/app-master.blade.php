<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{url ('assets/css/bootstrap.min.css')}}">
    <style>
        body{
            background-color: cadetblue;
        }
       
    </style>
</head>
<body>
    
    @include('layouts.partials.navbar')
<main class="container">
    @yield('content')
</main>
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>