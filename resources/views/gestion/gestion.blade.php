@extends('template')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold mb-5">
                    Gestionar Directorio
                </h2>
            </div>

            
            <div class="col-4 p-3">
                <div class="card">
                    <div class="card-header text-center bg-secondary text-white">
                         <h4>Arturo Resendiz López</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                               <b>Puesto: </b>Encargado de sistemas
                            </div>
                            <div class="col-12">
                               <b> Email: </b> arturo.resendiz@grupopabsa.com
                            </div>
                            <div class="col-12">
                               <b>Tel&eacute;fono:</b> 249-172-5430
                            </div>
                            <div class="col-12">
                                <b>Exttención: </b> 107 
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-eraser"></i>
                        Borrar
                    </button>
                    <a href="{{route('editar')}}" class="btn btn-warning btn-sm">
                        <i class="fa fa-pencil"></i>
                        Editar
                    </a>
                </div>
            </div>
        </div>





    </div>
@endsection