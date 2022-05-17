@extends('template')

<div class="container">

    <div class="row">
   
    </div>


    <div class="row justify-content-center mt-5 ">  
        <div class="col-4 shadow p-5 mt-4">
            <h3 class="text-center">Ingresar</h3>
            <form action="{{route('entrar')}}" method="POST">
                @csrf @method('POST')
            <div class="form-group px-4">
                <label for="">Usuario</label>
                <input type="text" name="email" class="form-control">
            </div>
            <br>
            <div class="form-group px-4">
                <label for="">Contraseña</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group mt-4 text-center">
                <button class="btn btn-success btn-sm py-1">
                    <i class="fa fa-key"></i>
                    Entrar
                </button>
            </form>
                @if (session('error'))
                    <div class="alert alert-danger alert-sm py-1 mt-5">
                        <i class="fa-solid fa-circle-xmark"></i>
                        {{session('error')}}
                    </div>
                @endif
            </div>
        </div>
  
    </div>
</div>