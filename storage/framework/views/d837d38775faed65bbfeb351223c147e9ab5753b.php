<div class="container-fluid mt-1">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-2 border-radiu">
            <h2 class="display-5 text-center text-dark">Registrar producción</h2>

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
                      <label class="form-label" for="form3Example1">Fecha de siembra</label>
                      <input type="date" class="<?php echo e($errors->has('fechasiembra') ? 'is-invalid' : ''); ?> form-control" :value="old('fechasiembra')" wire:model="fechasiembra" />
                      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'fechasiembra']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'fechasiembra']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <div class="col">
                        <label class="form-label" for="form3Example1">Fecha de cosecha</label>
                        <input type="date" class="<?php echo e($errors->has('fechacosecha') ? 'is-invalid' : ''); ?> form-control" :value="old('fechacosecha')" wire:model="fechacosecha"/>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'fechacosecha']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'fechacosecha']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <div class="col">
                        <label class="form-label" for="form3Example1">Hectarias sembradas</label>
                        <input type="text" class="<?php echo e($errors->has('hectariaS') ? 'is-invalid' : ''); ?> form-control" :value="old('hectariaS')" wire:model="hectariaS"/>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'hectariaS']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'hectariaS']); ?> <?php echo $__env->renderComponent(); ?>
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
                        <select class="form-select" wire:model="selecGrupo" aria-label="Default select example">
                          <option selected>Grupo agricola</option>
                          <?php $__currentLoopData = $gruposs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($grupo->id); ?>"><?php echo e($grupo->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'selecGrupo']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'selecGrupo']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-outline">
                        <select class="form-select" wire:model="selecCultivo" aria-label="Default select example">
                          <option selected>Cultivo</option>
                          <?php if(!is_null($cultivos)): ?>
                              <?php $__currentLoopData = $cultivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cultivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($cultivo->id); ?>"><?php echo e($cultivo->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                        </select>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'selecCultivo']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'selecCultivo']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                      </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                          <select class="form-select" wire:model="hacienda_id" aria-label="Default select example">
                            <option selected>Selecciona hacienda</option>
                            <?php $__currentLoopData = $haciendass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hacienda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($hacienda->id); ?>"><?php echo e($hacienda->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'hacienda_id']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'hacienda_id']); ?> <?php echo $__env->renderComponent(); ?>
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
                          <button class="btn btn-success text-white" wire:click="crear()">Guardar</button>
                        </div>
                    </div>
                  </div>
           
        </div>
    </div>
<div><?php /**PATH /var/www/html/ministerio/resources/views/livewire/formProduccion.blade.php ENDPATH**/ ?>