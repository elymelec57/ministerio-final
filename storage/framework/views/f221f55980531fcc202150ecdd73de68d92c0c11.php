<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('header', null, []); ?> 
      <!--<h2 class="h4 font-weight-bold">
        
      </h2>-->
      <?php echo $__env->make('botones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php $__env->endSlot(); ?>
 
  <!-- Navbar -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- Carousel wrapper -->
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/ministerio/resources/views/welcome.blade.php ENDPATH**/ ?>