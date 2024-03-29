<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/icono.png">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      body{
        background-color: rgb(255, 255, 255);
      }
    </style>
    <title>Directorio Web</title>
</head>
<body>

<div class="container-fluid">
  <div class="row bg-success p-2 fixed-top justify-content-around text-center p-3">

    <div class="col-3">
      <a href="{{asset(route('inicio'))}}" class="text-white">
        <i class="fa fa-home"></i>
      </a>
    </div>
    
    <div class="col-3">
      <a href="{{route('login')}}" class="text-white">
        <i class="fa fa-lock"></i>
      </a>
    </div>
    @auth
      <div class="col-3">
        <a href="{{asset(route('gestion'))}}" class="text-white">
          <i class="fa fa-pencil"></i>
        </a>
      </div>
    @endauth

@auth
    
<div class="col-3">
  <a href="{{asset(route('agregar'))}}" class="text-white">
    <i class="fa fa-plus-square"></i>
  </a>
</div>

@endauth

  </div>
</div>

<br>
<br>
<br>


@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="{{asset('/js/app.js')}}"></script>

</body>
</html>