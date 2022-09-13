<h3 class="display-6 text-center">Editar productor</h3>
 <!-- modal para registrarun evento-->
<div class="row mt-3">

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

              <!--  <form class="row mt-3">-->
                <label class="col-lg-4 text-center"><p class="btn-success text-white pt-1 mt-2">Nombre</p>
                  <input type="text" wire:model="name"  name="name" class="form-control" value="<?php echo e(old('name')); ?>">
                  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <small>*<?php echo e($message); ?></small>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </label> 
               
                <label class="col-lg-4 text-center"><p class="btn-success text-white pt-1 mt-2">Telefono</p>
                  <input type="text" wire:model="telefono"   name="telefono" class="form-control" value="<?php echo e(old('telefono')); ?>">
                  <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <small>*<?php echo e($message); ?></small>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </label> 
               
                <label class="col-lg-4 text-center"><p class="btn-success text-white pt-1 mt-2">Email</p>
                  <input type="email"  name="email" wire:model="email" class="form-control" value="<?php echo e(old('email')); ?>">
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <small>*<?php echo e($message); ?></small>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </label>
               <!-- <form>-->
              <!-- </div>-->
</div>

<div class="text-center">
  <button  wire:click="update()" class="btn btn-success text-white mt-2" >
    Actualizar
  </button>
  <button  wire:click="cancelarEditar()" class="btn btn-danger text-white mt-2" >
    Atras
  </button>
</div><?php /**PATH /var/www/html/ministerio/resources/views/livewire/editProductor.blade.php ENDPATH**/ ?>