<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
            Iniciar Sesión
        </h2>
  
     <?php $__env->endSlot(); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-2 border-radiu">
              <h2 class="display-5 text-center text-dark">Iniciar Sesión</h2>
                
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <form  method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" class="form-control" />
                      <label class="form-label" for="form2Example1">Email</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" class="form-control" />
                      <label class="form-label" for="form2Example2">Contraseña</label>
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                  
                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-success btn-block text-white mb-4">Sign in</button>
                  
                    <!-- Register buttons -->
                  </form>
             
            </div>
        </div>
    </div>
  
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /var/www/html/ministerio/resources/views/auth/login.blade.php ENDPATH**/ ?>