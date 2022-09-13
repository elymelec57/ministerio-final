
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

  <?php if(Auth::user()->rol == '1' || Auth::user()->rol == '2'): ?>
  <h4 class="">Productor: <?php echo e($name->name); ?></h4>
  <?php endif; ?>

  <h1 class="display-6 text-center">Tabla haciendas</h1>
        <div class="table-responsive mt-3">
            <table class="table">
              <thead class="bg bg-success text-white">
                  <tr>
                    <th>Nombre hacienda</th>
                    <th>Telefono</th>
                    <th>Hectaria</th>
                    <th>Region</th>
                    <th>Direccion</th>
                    <th class="text-center">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $haciendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hacienda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($hacienda->name); ?></td>
                    <td><?php echo e($hacienda->telefono); ?></td>
                    <td><?php echo e($hacienda->hectaria); ?></td>
                    <td>Estado: <?php echo e($hacienda->estado); ?> <br/> Municipio: <?php echo e($hacienda->municipio); ?> <br/> Parroquia: <?php echo e($hacienda->parroquia); ?></td>
                    <td><?php echo e($hacienda->direccion); ?></td>
                    <td class="text-center">

                      <?php if(Auth::user()->rol == '2' || Auth::user()->rol == '1' || Auth::user()->rol == '0'): ?>
                      <button  wire:click="ListProducciones(<?php echo e($hacienda->id); ?>)" class="btn btn-success text-white btn-sm">producciones</button>
                      <?php endif; ?>
                      
                      
                      <?php if(Auth::user()->rol == '0'): ?>
                      <button  wire:click="editHacienda(<?php echo e($hacienda->id); ?>)" class="btn btn-success text-white btn-sm">Editar</button>
                      <?php endif; ?>

                      <?php if(Auth::user()->rol == '1'): ?>
                      <button  wire:click="editHacienda(<?php echo e($hacienda->id); ?>)" class="btn btn-success text-white btn-sm">Editar</button>
                      <button wire:click="modalHacienda(<?php echo e($hacienda->id); ?>)" class="btn btn-danger text-white btn-sm">Eliminar</button>
                      <?php endif; ?>

                    </td> 
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
        </div>
            <div class="row">
                <div class="col text-center">
                  <?php if(Auth::user()->rol == '1' || Auth::user()->rol == '2'): ?>
                    <button wire:click="tablaPro()" class="btn btn-danger text-white btn-sm">Atras</button>   
                    <?php else: ?>
                    <button wire:click="registroHacienda()" class="btn btn-danger text-white btn-sm">Atras</button>
                  <?php endif; ?>
                </div>
            </div>
           
          <?php /**PATH /var/www/html/ministerio/resources/views/livewire/haciendasTable.blade.php ENDPATH**/ ?>