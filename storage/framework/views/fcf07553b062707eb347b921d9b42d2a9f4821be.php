<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
            <?php echo e(__('Profile')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <?php if(Laravel\Fortify\Features::canUpdateProfileInformation()): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-profile-information-form')->html();
} elseif ($_instance->childHasBeenRendered('oGfJDS7')) {
    $componentId = $_instance->getRenderedChildComponentId('oGfJDS7');
    $componentTag = $_instance->getRenderedChildComponentTagName('oGfJDS7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oGfJDS7');
} else {
    $response = \Livewire\Livewire::mount('profile.update-profile-information-form');
    $html = $response->html();
    $_instance->logRenderedChild('oGfJDS7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-password-form')->html();
} elseif ($_instance->childHasBeenRendered('LTbxj4F')) {
    $componentId = $_instance->getRenderedChildComponentId('LTbxj4F');
    $componentTag = $_instance->getRenderedChildComponentTagName('LTbxj4F');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LTbxj4F');
} else {
    $response = \Livewire\Livewire::mount('profile.update-password-form');
    $html = $response->html();
    $_instance->logRenderedChild('LTbxj4F', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if(Laravel\Fortify\Features::canManageTwoFactorAuthentication()): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.two-factor-authentication-form')->html();
} elseif ($_instance->childHasBeenRendered('nQD3F3z')) {
    $componentId = $_instance->getRenderedChildComponentId('nQD3F3z');
    $componentTag = $_instance->getRenderedChildComponentTagName('nQD3F3z');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nQD3F3z');
} else {
    $response = \Livewire\Livewire::mount('profile.two-factor-authentication-form');
    $html = $response->html();
    $_instance->logRenderedChild('nQD3F3z', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form')->html();
} elseif ($_instance->childHasBeenRendered('OFSqEXi')) {
    $componentId = $_instance->getRenderedChildComponentId('OFSqEXi');
    $componentTag = $_instance->getRenderedChildComponentTagName('OFSqEXi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OFSqEXi');
} else {
    $response = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form');
    $html = $response->html();
    $_instance->logRenderedChild('OFSqEXi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.delete-user-form')->html();
} elseif ($_instance->childHasBeenRendered('xNXjSFu')) {
    $componentId = $_instance->getRenderedChildComponentId('xNXjSFu');
    $componentTag = $_instance->getRenderedChildComponentTagName('xNXjSFu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xNXjSFu');
} else {
    $response = \Livewire\Livewire::mount('profile.delete-user-form');
    $html = $response->html();
    $_instance->logRenderedChild('xNXjSFu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/ministerio/resources/views/profile/show.blade.php ENDPATH**/ ?>