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
    <h4 class="">Productor: <?php echo e($name->name); ?> > Hacienda: <?php echo e($nombreH->name); ?></h4>
  <?php endif; ?>
  
  <h1 class="display-6 text-center">Tabla producciones</h1>
          <div class="table-responsive mt-3">
            <table class="table">
              <thead class="bg bg-success text-white">
                  <tr>
                    <th>Fecha siembre</th>
                    <th>Fecha cosecha</th>
                    <th>Cantidad siembra</th>
                    <th>cultivo</th>
                    <th class="text-center">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $producciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Produccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($Produccion->fechaS); ?></td>
                    <td><?php echo e($Produccion->fechaC); ?></td>
                    <td><?php echo e($Produccion->cantidadS); ?></td>
                    <td><?php echo e($Produccion->cultivo); ?></td>
                    <td class="text-center">

                      <?php if(Auth::user()->rol == '0'): ?>
                      <button  wire:click="editarProduccion(<?php echo e($Produccion->id); ?>)" class="btn btn-success text-white btn-sm">Editar</button>
                      <?php endif; ?>

                      <?php if(Auth::user()->rol == '1'): ?>
                      <button  wire:click="editarProduccion(<?php echo e($Produccion->id); ?>)" class="btn btn-success text-white btn-sm">Editar</button>
                      <button wire:click="modalProduccion(<?php echo e($Produccion->id); ?>)" class="btn btn-danger text-white btn-sm">Eliminar</button>
                      <?php endif; ?>
                    </td> 
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
            <div class="row">
                <div class="col text-center">
                  <button wire:click="tablaHacienda()" class="btn btn-danger text-white btn-sm">Atras</button>
                </div>
            </div><?php /**PATH /var/www/html/ministerio/resources/views/livewire/produccionesTable.blade.php ENDPATH**/ ?>