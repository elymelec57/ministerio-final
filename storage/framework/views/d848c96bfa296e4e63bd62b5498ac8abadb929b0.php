 <?php $__env->slot('header', null, []); ?> 

 <?php $__env->endSlot(); ?>
  
  <section class="container-fluid mt-4">
      <div class="row ">

        <section class="col-lg-4">
              <?php echo $__env->make("livewire.$vista", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>

        <section class="col-lg-8 ">
          <h3 class="display-6 text-center">Evento publicados</h3>
          <div class="row">

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

            <div class="col-lg-12 d-flex flex-wrap">
              <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('livewire.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
           
          </div>  
       </section>

      </div>

          <!-- modal para confirmarla accion de eliminar-->
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dialog-modal','data' => ['wire:model' => 'abrir']]); ?>
<?php $component->withName('jet-dialog-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'abrir']); ?>
     <?php $__env->slot('title', null, []); ?> 
        
   <?php $__env->endSlot(); ?>

     <?php $__env->slot('content', null, []); ?> 
        <?php echo e($mensaje); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('footer', null, []); ?> 
      <button wire:click="eliminar()" class="btn btn-danger btn-sm text-white">Aceptar</button>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-------------------------->

  </section>


  
   
  <?php /**PATH /var/www/html/ministerio/resources/views/livewire/admin.blade.php ENDPATH**/ ?>