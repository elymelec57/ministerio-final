<h3 class="display-6 text-center">Editar evento</h3>
 <!-- modal para registrarun evento-->
<div class="row mt-3">
              <!--  <form class="row mt-3">-->
                <label class="col-lg-6 text-center"><p class="btn-success text-white pt-1 mt-2">Titulo del evento</p>
                  <input type="text" wire:model="nombre" name="nombre" id="nombre" class="<?php echo e($errors->has('nombre') ? 'is-invalid' : ''); ?> form-control" value="<?php echo e(old('nombre')); ?>">
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'nombre']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'nombre']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </label> 
               
                <label class="col-lg-6 text-center"><p class="btn-success text-white pt-1 mt-2">Dirección del evento</p>
                  <input type="text" wire:model="direccion" class="<?php echo e($errors->has('direccion') ? 'is-invalid' : ''); ?> form-control" value="<?php echo e(old('direccion')); ?>">
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'direccion']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'direccion']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </label> 
               
                <label class="col-lg-6 text-center"><p class="btn-success text-white pt-1 mt-2">Fecha de apertura</p>
                  <input type="date" wire:model="apertura"  class="<?php echo e($errors->has('apertura') ? 'is-invalid' : ''); ?> form-control" value="<?php echo e(old('apertura')); ?>">
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'apertura']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'apertura']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </label>
     
                <label class="col-lg-6 text-center"><p class="btn-success text-white pt-1 mt-2">Fecha de culminación</p>
                  <input type="date" wire:model="clausura" class="<?php echo e($errors->has('clausura') ? 'is-invalid' : ''); ?> form-control" value="<?php echo e(old('clausura')); ?>">
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'clausura']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'clausura']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </label>
     
                <label class="col-lg-6 text-center"><p class="btn-success text-white pt-1 mt-2">Hora del evento</p>
                  <input type="time" wire:model="hora" class="<?php echo e($errors->has('hora') ? 'is-invalid' : ''); ?> form-control" value="<?php echo e(old('hora')); ?>">
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'hora']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'hora']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </label>
     
                <label class="col-lg-6 text-center"><p class="btn-success text-white pt-1 mt-2">Imagen para el evento</p>
                  <input type="file" wire:model="file" class="<?php echo e($errors->has('file') ? 'is-invalid' : ''); ?> form-control" accept="image/*" value="<?php echo e(old('file')); ?>">
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'file']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'file']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </label> 
     
                <label class="col-lg-12 text-center"><p class="btn-success text-white pt-1 mt-2">Información extra del evento</p>
                  <textarea type="text" wire:model="informacion" class="<?php echo e($errors->has('informacion') ? 'is-invalid' : ''); ?> form-control" value="<?php echo e(old('informacion')); ?>"></textarea>
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'informacion']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'informacion']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </label>
               <!-- <form>-->
              <!-- </div>-->
</div>

<div class="text-center">
  <button  wire:click="update" class="btn btn-success text-white mt-2" >
    Actualizar
  </button>
  <button  wire:click="cancelar" class="btn btn-danger text-white mt-2" >
    cancelar
  </button>
</div><?php /**PATH /var/www/html/ministerio/resources/views/livewire/edit.blade.php ENDPATH**/ ?>