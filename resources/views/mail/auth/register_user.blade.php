<!DOCTYPE html>
<html>
<head>
    <title>Laravel Mail Queue Tutorial</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--Custom Styles --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <style>
    .jumbotron img{
        border-radius: 8px;
        margin-bottom: 8px;
    }
    </style>
</head>
<body>  
    <div class="container">
        <div class="jumbotron">
            <img src="{{asset('image/logo2.jpg')}}" class="mt-4" alt="">
            <p class="lead mb-5">
                Dear <span class="maroon">{{$user->userFirstName}} {{$user->userLastName}}</span>, <br>
                Thank you for registering on Birth.           
                
            </p>
        </div>
    </div>
</body>
</html>