    @extends('template')

@section('content')
   <div class="container">
       <div class="row justify-content-center mt-3">
           <div class="col-12 text-center mt-4">
              <h1> Directorio </h1>
           </div>

           <div class="col-6 text-center">
            @if (session('logeado'))
            <div class="alert alert-success font-weight-bold">
                <i class="fa fa-check"></i>
                {{session('logeado')}}
                <span>
                    <li></li>
                </span>
            </div> 
            @endif
         
            @if (session('codigo'))
                <div class="alert alert-success font-weight-bold">
                    {{session('codigo')}}
                </div>
            @endif
            
            @if (session('success'))
                <div class="alert alert-success font-weight-bold">
                    {!!session('success')!!}
                </div>    
            @else
                
            @endif
                
            </div>
                
       </div>

       <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 text-center">
                <form action="{{route('buscar')}}" method="POST">
                    @csrf @method('POST')
                    <input type="text" class="form-control" placeholder="Buscar" name="buscado" required>
       
                    <button class="btn btn-success btn-sm mt-2" type="submit">
                        <i class="fa fa-search"></i>
                        Buscar
                    </button>
                </form>
            </div>
       </div>


       <div class="row bg-white mt-3 rounded justify-content-center">

    
           
    
     @if (isset($trabajador))
     <div class="col-7 text-center">
         <div class="alert alert-success shadow-sm  p-1">
             Se envio el código al correo <b> <i>{{$trabajador[0]->correo}}</i> </b> por favor da clic en el boton 
             "compartir número celular e introduce el código que te fue mandado y tu numero de celular" 
         </div>
     </div>
     @forelse ($trabajador as $trabajadorItem)
     <div class="col-12 col-sm-12 col-md-5 col-lg-5 shadow mx-1 btn-primary mt-3">
         <div class="row ">
            <div class="col-12 mt-3 text-end"> 
                <form action="{{asset(route('codigo'))}}" method="POST">
                    @csrf
                    <input type="text" name="codigo" value="{{$trabajadorItem->correo}}" hidden>
                    <button class="btn btn-secondary rounded-pill btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Enviar código nuevamente"> 
                        <i class="fa fa-paper-plane"></i>
                    </button>
                </form>
            </div>
             <div class="col-12 text-center">
                 <b class="h4"> {{$trabajadorItem->nombre}} </b>
                </div>
                <div class="col-12">
                    <b>Puesto: </b> {{$trabajadorItem->puesto}}   
                </div>
                <div class="col-12">
                    <b>Email: </b>   <a href="mailto:{{$trabajadorItem->correo}}">{{$trabajadorItem->correo}}</a>
                </div>
                <div class="col-12">
                    <b>N&uacute;mero: </b>{{$trabajadorItem->celular}}
                </div>
                <div class="col-12">
                    <b>Planta: </b>{{$trabajadorItem->planta}}
                </div>
                <div class="col-12">
                    <b>Extensión: </b>{{$trabajadorItem->extencion}}
                </div>
                <div class="col-12 text-center p-3 ">
                    <button class="btn btn-light btn-sm text-center" data-bs-toggle="modal" data-bs-target="#e{{$trabajadorItem->id}}">
                        <i class="fa-solid fa-id-card-clip text-primary"></i>
                        Compartir número de celular
                    </button>
                </div>
            </div>
        </div>
        
        
        <!-- Modal -->
        <div class="modal fade" id="e{{$trabajadorItem->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Datos personales</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            <div class="col-12">
                <p>
                    Se envio un codigo al correo <b>{{$trabajadorItem->correo}}</b> para confirmar tu identidad y poder ingresar tus datos personales. 
                </p>
          </div>
          <div class="col-9 col-sm-9 col-md-9 col-lg-9">

              <form action="{{asset(route('celular', $trabajadorItem->id))}}" method="POST">
                @csrf @method('PATCH')
                  <div class="form-group px-5">
                      <label for="">Teléfono celular</label>
                      <input type="tel" pattern="^[2-9]{2}[0-9]{8}$" class="form-control form-control-sm" name="celular" placeholder="Ejemplo: 2491142548" required>
                    </div>
                    <div class="form-group ">
                        <label for="">Código recibido</label>
                        <input type="text" class="form-control" name="codigo" required>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button  class="btn btn-primary">Enviar datos</button>
        </form>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    </div>
</div>
</div>
</div>   



@empty

@else


@endforelse

 @endif     {{--Termina con el IF  que se asegura que la variable trabajador exista   --}}







     @if (isset($resultado))  
        @forelse ($resultado as $resultadoItem)
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 shadow mx-1 mt-3">
            <div class="row p-4 justify-content-center">
                {{-- <div class="col-6 p-3 text-center">
                    <img src="/img/majo.jpg" class="img-fluid" alt="">
                </div> --}}
                <div class="col-12 text-center">
                    <b class="h4"> {{$resultadoItem->nombre}} </b>
                </div>
                <div class="col-12">
                    <b>Puesto: </b> {{$resultadoItem->puesto}}   
                </div>
                <div class="col-12">
                    <b>Email: </b>   <a href="mailto:{{$resultadoItem->correo}}">{{$resultadoItem->correo}}</a>
                </div>
                <div class="col-12">
                    <b>N&uacute;mero: </b> <a href="tel:{{$resultadoItem->celular}}" style="text-decoration-line: none"> {{$resultadoItem->celular}} </a>
                </div>
                <div class="col-12">
                    <b>Planta: </b>{{$resultadoItem->planta}}
                </div>
                <div class="col-12">
                    <b>Extensión: </b>{{$resultadoItem->extencion}}
                </div>
                
                @if ($resultadoItem->celular == null)

                    
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2"> 
                        <form action="{{asset(route('codigo'))}}" method="POST">
                            @csrf
                            <input type="text" name="codigo" value="{{$resultadoItem->correo}}" hidden>
                            <button class="btn btn-success btn-sm">
                                <i class="fa fa-paper-plane"></i>
                                Mandame mi codigo
                            </button>
                        </form>
                    </div>
                @else
                    
                @endif



            </div>
          </div>



        @empty
            <div class="alert alert-warning">
                <i class="fa fa-circle-cross"></i>
                No se encontraron resultados
            </div>
        @endforelse

        @endif 



        @if (isset($datos_trabajador))  

        @forelse ($datos_trabajador as $datos_trabajadorItem)
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 shadow mx-1 mt-3">
            <div class="row p-4">
                <div class="col-12 text-center">
                    <b class="h4"> {{$datos_trabajadorItem->nombre}} </b>
                </div>
                <div class="col-12">
                    <b>Puesto: </b> {{$datos_trabajadorItem->puesto}}   
                </div>
                <div class="col-12">
                    <b>Email: </b>   <a href="mailto:{{$datos_trabajadorItem->correo}}">{{$datos_trabajadorItem->correo}}</a>
                </div>
                <div class="col-12">
                    <b>N&uacute;mero: </b>{{$datos_trabajadorItem->celular}}
                </div>
                <div class="col-12">
                    <b>Planta: </b>{{$datos_trabajadorItem->planta}}
                </div>
                <div class="col-12">
                    <b>Extensión: </b>{{$datos_trabajadorItem->extencion}}
                </div>
               <div class="col-12 text-center mt-4">
                <h5> <i class="text-primary font-weight-bold"> ¡Muchas gracias por colaborar {{strtok( $datos_trabajadorItem->nombre," ")}}! </i></h5>
                <span style="font-size:50px">&#128523</span>
               </div>
            </div>
          </div>



        @empty
            <div class="alert alert-warning">
                <i class="fa fa-circle-cross"></i>
                No se encontraron resultados
            </div>
        @endforelse

        @endif 


    </div>




    
        




       </div>

       

  




@endsection