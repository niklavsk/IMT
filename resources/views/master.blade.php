<!DOCTYPE html>
<html>
<head>
    <title>Stray Cats Gallery - @stack('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @stack('head')
</head>
<body>
    <div class="topnav">
        <a class="active" href="{{ route('home') }}">Home</a>
    </div>

    <div class="container">
        @stack('content')
    </div>
</body>
</html>







