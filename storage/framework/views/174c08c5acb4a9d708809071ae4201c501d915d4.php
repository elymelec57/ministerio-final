<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.action-message','data' => ['on' => 'saved']]); ?>
<?php $component->withName('jet-action-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['on' => 'saved']); ?>
  <?php echo e($mensaje); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

  <h3 class="display-6 text-center">Productores de venezuela</h3>
  <div class="container" >
    <div class="row">

      <div class="col- col-sm-6 col-md-4 col-lg-3 ">
        <input type="text" placeholder="Filtrar cedula" wire:model="filtrar"  class="form-control">
      </div>

      <div class="col-md-4 col-lg-9">
         <div class="row justify-content-end">
            <div class=" mt-2 col-sm-12 col-lg-2">
              <a class="btn btn-success text-white" href="<?php echo e(route('pro.pdf')); ?>" >PDF</a>
            </div>
         </div>
      </div>     
    </div>

    <div class="table-responsive mt-3">
            <table class="table">
              <thead class="bg bg-success text-white">
                  <tr>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th class="text-center">Acciones</th>
                  </tr>
              </thead>
              <tbody>
               <?php $__currentLoopData = $productores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($productor->name); ?></td>
                      <td><?php echo e($productor->cedula); ?></td>
                      <td><?php echo e($productor->telefono); ?></td>
                      <td><?php echo e($productor->email); ?></td>
                      <td class="text-center">
                        
                        <button  wire:click="listHaciendas(<?php echo e($productor->id); ?>)" class="btn btn-success text-white btn-sm">Haciendas</button>

                        <?php if(Auth::user()->rol == '1'): ?>
                        <button  wire:click="editar(<?php echo e($productor->id); ?>)" class="btn btn-success text-white btn-sm">Editar</button>
                        <button wire:click="modalProductor(<?php echo e($productor->id); ?>)" class="btn btn-danger text-white btn-sm">Eliminar</button>
                        <?php endif; ?>
                      </td>
                      
                  </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
    </div>

    <div class="d-flex">
      <?php echo $productores->links(); ?>

    </div>
           <?php /**PATH /var/www/html/ministerio/resources/views/livewire/productoresTable.blade.php ENDPATH**/ ?>