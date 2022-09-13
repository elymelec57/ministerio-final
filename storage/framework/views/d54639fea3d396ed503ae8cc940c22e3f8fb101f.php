 <?php $__env->slot('header', null, []); ?> 
    
 <?php $__env->endSlot(); ?>
  
  <section class="container-fluid mt-4">
      <div class="row ">

        <section class="col-lg-12">
            <?php echo $__env->make("livewire.$vista", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>

        <div class="col-lg-12">
          
        </div>

      </div>
  </section>
<?php /**PATH /var/www/html/ministerio/resources/views/livewire/produccion.blade.php ENDPATH**/ ?>