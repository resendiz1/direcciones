@extends('template')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-6 text-center">
            <h2>Editar Usuario</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4 shadow p-5">
            <form action="{{route('actualizar', $trabajador->id)}}" method="POST" >
                @csrf @method('PATCH')
                <div class="form-group">
                    <label for="">Nombre completo</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" value="{{$trabajador->nombre}}">
                </div>
                <div class="form-group">
                    <label for="">Puesto</label>
                    <input type="text" name="puesto" class="form-control form-control-sm" value="{{$trabajador->puesto}}">
                </div>
                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <input type="email" name="correo" class="form-control form-control-sm" value="{{$trabajador->correo}}">
                </div>
                <div class="form-group">
                    <label for="">N&uacute;mero de celular</label>
                    <input type="text" name="celular" class="form-control form-control-sm" value="{{$trabajador->celular}}">
                </div>
                <div class="form-group">
                    <label for="">Ext. PABSA</label>
                    <input type="text" name="extencion" class="form-control form-control-sm" value="{{$trabajador->extencion}}">
                </div>
                
                <div class="form-group">
                    <label for="">Planta</label>
                    <input type="text" name="planta" class="form-control form-control-sm" value="{{$trabajador->planta}}">
                </div>

                <div class="form-group mt-3">
                    <button class="btn btn-success w-100">
                        <i class="fa fa-plus-square mx-1"></i>
                        Agregar
                    </button>
                </div>
                
                
            </form>
        </div>
    </div>
</div>




    
@endsection