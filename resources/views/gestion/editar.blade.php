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
            <form action="">
                <div class="form-group">
                    <label for="">Nombre completo</label>
                    <input type="text" name="nombre" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">Puesto</label>
                    <input type="text" name="puesto" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <input type="email" name="correo" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">N&uacute;mero Telef&oacute;nico</label>
                    <input type="text" name="telefono" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">Ext. PABSA</label>
                    <input type="text" name="extencion" class="form-control form-control-sm">
                </div>
                
                <div class="form-group">
                    <label for="">Planta</label>
                    <input type="text" name="planta" class="form-control form-control-sm">
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