<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/slider.css')}}" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="image/fav.png" />
    <title>E-Commerce</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>