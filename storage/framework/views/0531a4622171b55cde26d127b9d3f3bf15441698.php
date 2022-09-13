<div class='card col-lg-4 col-md-4 col-sm-6 mb-3 mt-3'>
         <img class='card-img-top img-responsive' src='<?php echo e(Storage::url($evento->file)); ?>' alt='card image cap'>
         <div class='card-block p-3'>
            <h4 class='card-title'><?php echo e($evento->nombre); ?></h4>
            <p class='card-text'>Direccion: <?php echo e($evento->direccion); ?></p>
            <p class='card-text'>Fecha: <?php echo e($evento->apertura); ?></p>
               <p class='card-text'>Hora: <?php echo e($evento->hora); ?></p>
            <!--<a class='btn btn-primary'--> 

                  <!--buttom trigger modal-->
            <button type='button' class='btn btn-success text-white' data-mdb-toggle="modal" data-mdb-target="#<?php echo e($evento->id); ?>">ver mas información</button>

            <div class='row mt-3'>
               <?php if(Auth::user()->rol == '2'): ?>

                  <?php else: ?>
                   <div class='col col-lg-6 text-center'>
                     <button type="" wire:click="editar(<?php echo e($evento->id); ?>)" class="btn btn-success text-white" data-mdb-toggle="modal" data-mdb-target="#modificar">Editar</button>
                  </div>
   
                  <div class='col col-lg-6 text-center'>
                     <button type="" wire:click.prevent="eliminar1(<?php echo e($evento->id); ?>)" class="btn btn-danger text-white">Eliminar</button>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      </div>

      

   <div class="modal fade" id="<?php echo e($evento->id); ?>" tabindex="-1" role="dialog" aria-labelledby="#exampleModallabel" aria-hidden="true">
         <div class='modal-dialog' role='document'>
            <div class='modal-content'>
               <div class='modal-header'>
                  <h5 class='modal-title' id='#exampleModalLabel'></h5>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                  </button>
               </div>
               <div class='modal-body'>
                  <p><?php echo e($evento->informacion); ?></p>
               </div>
               <div class='modal-footer'>
                  <button type='button' class='btn btn-success' data-mdb-dismiss="modal">Cerrar</button>
                  <!--<button type='button' class='btn btn-primary'>save changes</button>-->
               </div>
            </div>
         </div>
   </div>

<?php /**PATH /var/www/html/ministerio/resources/views/livewire/card.blade.php ENDPATH**/ ?>