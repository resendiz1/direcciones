@extends('template')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h2>Nuevo Usuario</h2>
        
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-6">
         @if (session('agregado'))
             <div class="alert alert-success p-3 text-center font-weight-bold h5">
                 {{session('agregado')}}
             </div>
         @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-xs-12 col-sm-12 col-md-6 shadow p-5">
            <form action="{{asset(route('create'))}}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="">Nombre completo</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" required>
                </div>
                <div class="form-group">
                    <label for="">Puesto</label>
                    <input type="text" name="puesto" class="form-control form-control-sm" required>
                </div>
                <div class="form-group">
                    <label for="">Correo Electr&oacute;nico</label>
                    <input type="email" name="correo" class="form-control form-control-sm" required>
                </div>
                <div class="form-group">
                    <label for="">N&uacute;mero Telef&oacute;nico</label>
                    <input type="tel" name="telefono" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">Ext. PABSA</label>
                    <input type="text" name="extencion" class="form-control form-control-sm" required>
                </div>
                
                <div class="form-group">
                    <label for="">Planta</label>
                    <input type="number" name="planta" class="form-control form-control-sm" required>
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