@extends('template')

@section('content')
   <div class="container">
       <div class="row justify-content-center mt-3">

        
           <div class="col-12 text-center mt-4">
              <h1> Directorio</h1>
           </div>
           <div class="col-2">
           </div>
       </div>

       <div class="row mt-5 justify-content-center">
            <div class="col-5 text-center">
                    <input type="text" class="form-control" placeholder="Buscar">
                    <button class="btn btn-success btn-sm mt-2">
                        <i class="fa fa-search"></i>
                        Buscar
                    </button>
            </div>
       </div>


       <div class="row bg-white mt-3 rounded justify-content-center">

          <div class="col-5 shadow mx-1">
            <div class="row p-4">
                <div class="col-12 text-center">
                    <b class="h4"> Arturo Resendiz López </b>
                </div>
                <div class="col-12">
                    <b>Puesto: </b> Encargado de sistemas   
                </div>
                <div class="col-12">
                    <b>Email: </b>arturo.resendiz@grupopabsa.com
                </div>
                <div class="col-12">
                    <b>N&uacute;mero: </b>249-172-3450
                </div>
                <div class="col-12">
                    <b>Planta: </b>1
                </div>
                <div class="col-12">
                    <b>Celular: </b>2491172412
                </div>
                <div class="col-12">
                    <b>Mail personal: </b>mailpersonaL@gmail.com
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-primary btn-sm text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-id-card-clip"></i>
                        Compartir datos personales
                    </button>
                </div>
            </div>
          </div>
       </div>

       

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      Se envio un codigo al correo "correo del usuario" para confirmar tu identidad y poder ingresar tus datos personales. 
                  </p>
              </div>
              <div class="col-8">
                  <form action="">
                      <div class="form-group">
                          <label for="">Teléfono celular</label>
                          <input type="text" class="form-control form-control-sm">
                      </div>
                      <div class="form-group">
                        <label for="">Correo electrtónico personal</label>
                        <input type="text" class="form-control form-control-sm">
                    </div>

                    <div class="form-group px-5">
                        <label for="">Código recibido</label>
                        <input type="text" class="form-control">
                    </div>
                  </form>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Enviar datos</button>
        </div>
      </div>
    </div>
  </div>



@endsection