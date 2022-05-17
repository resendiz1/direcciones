@extends('template')
@section('content')
    <div class="container mt-3">
        <div class="row  justify-content-center">
            @if (session('eliminado'))
                <div class="col-6">
                        <div class="alert alert-warning font-weight-bold text-center">
                            {{session('eliminado')}}
                        </div>
                </div>
            @endif
            <div class="col-12 text-center">
                <h2 class="font-weight-bold mb-5">
                    Gestionar Directorio
                </h2>
            </div>
      
            @forelse ($resultado as $resultadoItem)
            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-5 p-3">
                <div class="card">
                    <div class="card-header text-center bg-secondary text-white">
                         <h4>{{$resultadoItem->nombre}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                               <b>Puesto: </b>{{$resultadoItem->puesto}}
                            </div>
                            <div class="col-12">
                               <b> Email: </b> {{$resultadoItem->correo}}
                            </div>
                            <div class="col-12">
                                <b>Exttención: </b> {{$resultadoItem->extencion}} 
                            </div>
                            <div class="col-12">
                                @if ($resultadoItem->celular==null)
                                <b>Celular: </b> Aún no es proporcionado por el trabajador  
                                @else
                                <b>Celular: </b> {{$resultadoItem->celular}} 
                                @endif
                            </div>
                            <div class="col-12">
                                <b>Se Ubica en planta: </b> {{$resultadoItem->planta}}
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger btn-sm m-2" data-bs-toggle="modal" data-bs-target="#eliminar{{$resultadoItem->id}}" >
                        <i class="fa fa-eraser"></i>
                        Borrar
                    </button>
                        <a href="{{route('editar', $resultadoItem->id)}}" class="btn btn-warning btn-sm m-2">
                            <i class="fa fa-pencil"></i>
                            Editar
                        </a>
                    </div>
                </div>
            </div>



  
  <!-- Modal -->
  <div class="modal fade" id="eliminar{{$resultadoItem->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
              <div class="col-12">
                  <h5>¿Desea eliminar al trabajador <b> {{$resultadoItem->nombre}} </b>de la base de datos?</h5>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center mt-4">
                <form action="{{route('borrar', $resultadoItem->id)}}" method="POST">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-block">
                        Confirmar eliminación
                    </button>
                </form>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center mt-4">
                <button class="btn btn-success btn-block" data-bs-dismiss="modal">
                    Cancelar
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        

        












            @empty
                <div class="alert alert-warning">
                    No se encontraron datos
                </div>
            @endforelse














    




    </div>
@endsection