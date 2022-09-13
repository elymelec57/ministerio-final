 <?php $__env->slot('header', null, []); ?> 
    
 <?php $__env->endSlot(); ?>
  
  <section class="container-fluid mt-4">
      <div class="row ">

        <!-- tabla productor-->
        <div class="col-lg-12 ">
            <?php echo $__env->make("livewire.$vista2", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

         <!-- vista para editar productor-->
         <section class="col-lg-12 ">
          <?php echo $__env->make("livewire.$vista", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       </section>
      

         <!-- tabla haciendas -->
        <div class="col-lg-12 ">
          <?php echo $__env->make("livewire.$vista3", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

          <!-- tabla prodcciones -->
          <div class="col-lg-12 ">
            <?php echo $__env->make("livewire.$vista4", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
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
        <button wire:click="eliminar()" class="btn btn-danger text-white btn-sm">Aceptar</button>
       <?php $__env->endSlot(); ?>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
  <!-------------------------->

  </section>  <?php /**PATH /var/www/html/ministerio/resources/views/livewire/productor.blade.php ENDPATH**/ ?>