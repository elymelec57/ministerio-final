<div class="container-fluid mt-1">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-2 border-radiu">

          <?php if(Auth::user()->rol == '1'): ?>
          <h4 class="">Productor: <?php echo e($name->name); ?></h4>
          <?php endif; ?>
          
          <h2 class="display-5 text-center text-dark">Actualizar hacienda</h2>

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

          <div class="row mb-4">
            <div class="col">
              <label class="form-label" for="form3Example1">Nombre hacienda</label>
              <input type="text" class="<?php echo e($errors->has('nameHaciendaEdit') ? 'is-invalid' : ''); ?> form-control"  wire:model="nameHaciendaEdit"/>
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'nameHaciendaEdit']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'nameHaciendaEdit']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          </div>

          <div class="col">
              <label class="form-label" for="form3Example1">telefono</label>
              <input type="text" class="<?php echo e($errors->has('telefonoEdit') ? 'is-invalid' : ''); ?> form-control" wire:model="telefonoEdit"/>
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'telefonoEdit']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'telefonoEdit']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          </div>
        </div>

        <div class="row mb-4">

          <div class="col">
            <label class="form-label" for="form3Example1">hectaria</label>
            <input type="text" class="<?php echo e($errors->has('hectariaEdit') ? 'is-invalid' : ''); ?> form-control" wire:model="hectariaEdit"/>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'hectariaEdit']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'hectariaEdit']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          </div>
          
          <div class="col">
              <label class="form-label" for="form3Example1">Direccion</label>
              <input type="text" class="<?php echo e($errors->has('direccionEdit') ? 'is-invalid' : ''); ?> form-control"  wire:model="direccionEdit" />
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'direccionEdit']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'direccionEdit']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </div>

        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">

              <select class="form-select" wire:model="selecEstado">
                <option selected>Selecciona Estado</option>
                <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($estado->id); ?>"><?php echo e($estado->name); ?></option>
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

                  <div class='container-fluid'>
                    <div class="row ">
                        <div class="col text-center mt-1">
                          <button  wire:click="updateHacienda()" class="btn btn-success text-white mt-2" >
                            Actualizar
                          </button>
                          <button  wire:click="cancelarEditHacienda()" class="btn btn-danger text-white mt-2" >
                            Atras
                          </button>
                        </div>
                    </div>
                  </div>
            
        </div>
    </div>
<div><?php /**PATH /var/www/html/ministerio/resources/views/livewire/editHacienda.blade.php ENDPATH**/ ?>