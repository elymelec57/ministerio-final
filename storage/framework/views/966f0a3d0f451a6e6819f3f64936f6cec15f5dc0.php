<div class="row mb-4">
    <div class="col">
      <div class="form-outline">

        <select class="form-select" wire:model="selecEstado">
          <option selected>Selecciona Estado</option>
          <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option  value="<?php echo e($estado->id); ?>"><?php echo e($estado->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'selecEstado']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'selecEstado']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <select class="form-select" wire:model="selecMunicipio">
          <option selected>Selecciona Municipio</option>
          <?php if(!is_null($municipios)): ?>
              <?php $__currentLoopData = $municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($municipio->id); ?>"><?php echo e($municipio->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </select>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'selecMunicipio']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'selecMunicipio']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      </div>
    </div>
    <div class="col">
        <div class="form-outline">
          <select class="form-select" wire:model="selecParroquia">
            <option selected>Selecciona Parroquia</option>
            <?php if(!is_null($parroquias)): ?>
                <?php $__currentLoopData = $parroquias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parroquia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($parroquia->id); ?>"><?php echo e($parroquia->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </select>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'selecParroquia']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'selecParroquia']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
      </div>
  </div>

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
                    </td> 
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
  </div>
            <?php echo e($haciendas->links()); ?>          <?php /**PATH /var/www/html/ministerio/resources/views/livewire/haciendaBuscarTable.blade.php ENDPATH**/ ?>