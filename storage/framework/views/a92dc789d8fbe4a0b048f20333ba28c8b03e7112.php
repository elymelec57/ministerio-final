
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 p-2 border-radiu">
            <h2 class="display-5 text-center text-dark">Registro del productor</h2>

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

                <p>Datos personales</p>
                <hr>
                <div class="row mb-4">
                  
                    <div class="col">
                      <div class="form">
                        <label class="form-label" for="form3Example1">Nombre</label>
                        <input type="text" wire:model="name" class="<?php echo e($errors->has('name') ? 'is-invalid' : ''); ?> form-control" :value="old('name')" />
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'name']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                      </div>
                    </div>
                    <div class="col">
                        <div class="form">
                          <label class="form-label" for="form3Example1">Cedula</label>
                          <input type="text"  wire:model="cedula" class="<?php echo e($errors->has('cedula') ? 'is-invalid' : ''); ?> form-control" :value="old('cedula')"/>
                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'cedula']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'cedula']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    </div>
                  </div>
                  
                  <p>Datos para crear cuenta</p>
                  <hr>

                  <div class="row mb-4">
                    <div class="col">
                      <div class="form">
                        <label class="form-label" for="form3Example1">Telefono</label>
                        <input type="text" wire:model="telefono" class="<?php echo e($errors->has('telefono') ? 'is-invalid' : ''); ?> form-control" :value="old('telefono')"/>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'telefono']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'telefono']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                      </div>
                    </div>
                    <div class="col">
                      <div class="for">
                        <label class="form-label" for="form3Example2">Correo Electronico</label>
                        <input type="email" wire:model="email" class="<?php echo e($errors->has('email') ? 'is-invalid' : ''); ?> form-control" :value="old('email')"/>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'email']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'email']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col">
                      <div class="form">
                        <label class="form-label" for="form3Example1">Contraseña</label>
                        <input type="password" wire:model="password" class="<?php echo e($errors->has('password') ? 'is-invalid' : ''); ?> form-control"/>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'password']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form">
                        <label class="form-label" for="form3Example2">Confirmar</label>
                        <input type="password" wire:model="password_confirmation" class="form-control" />
                      </div>
                    </div>
                  </div>
    
                  <div class='container-fluid'>
                    <div class="row ">
                        <div class="col text-center mt-1">
                          <button  wire:click="create()" class="btn btn-success text-white">Guardar</button>
                          <button type="button" class="btn btn-danger text-white">Atras</button>
                        </div>
                    </div>
                  </div>
           
        </div>
    </div>
<div><?php /**PATH /var/www/html/ministerio/resources/views/livewire/registrar-productor.blade.php ENDPATH**/ ?>