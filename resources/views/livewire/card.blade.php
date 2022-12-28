<div class='card col-lg-4 col-md-4 col-sm-6 mb-3 mt-3'>
         <img class='card-img-top img-responsive' src='{{$evento->file}}' alt='card image cap'>
         <div class='card-block p-3'>
            <h4 class='card-title'>{{$evento->nombre}}</h4>
            <p class='card-text'>Direccion: {{$evento->direccion}}</p>
            <p class='card-text'>Fecha: {{$evento->apertura}}</p>
               <p class='card-text'>Hora: {{$evento->hora}}</p>
            <!--<a class='btn btn-primary'--> 

                  <!--buttom trigger modal-->
            <div class='row mt-3'>
               <div class='col col-lg-4 text-center'>
                  <button type='button' class='btn btn-success text-white' data-bs-toggle="modal" data-bs-target="#{{$evento->slug}}"><i class="fa-regular fa-plus"></i></button>
               </div>
               @if(@isset(Auth::user()->rol))
                  @if(Auth::user()->rol == '2')

                     @else
                     <div class='col col-lg-4 text-center'>
                        <button type="" wire:click="editar({{$evento->id}})" class="btn btn-success text-white" data-mdb-toggle="modal" data-mdb-target="#modificar"><i class="fas fa-edit"></i></button>
                     </div>

                     <div class='col col-lg-4 text-center'>
                        <button type="" wire:click.prevent="eliminar1({{$evento->id}})" class="btn btn-danger text-white"><i class="fas fa-trash"></i></button>
                     </div>
                  @endif
               @endisset
            </div>
         </div>
      </div>

      

   <div class="modal fade" id="{{$evento->slug}}" tabindex="-1" role="dialog" aria-labelledby="#exampleModallabel" aria-hidden="true">
         <div class='modal-dialog' role='document'>
            <div class='modal-content'>
               <div class='modal-header'>
                  <h5 class='modal-title' id='#exampleModalLabel'></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class='modal-body'>
                  <div class="row d-flex">
                     <p>{{$evento->informacion}}</p>
                  </div>
               </div>
               <div class='modal-footer'>
                  <button type='button' class="btn btn-success text-white" data-bs-dismiss="modal">Cerrar</button>
                  <!--<button type='button' class='btn btn-primary'>save changes</button>-->
               </div>
            </div>
         </div>
   </div>

