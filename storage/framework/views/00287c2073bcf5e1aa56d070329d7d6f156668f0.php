<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        
        <!-- Styles -->
       <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

        <?php echo \Livewire\Livewire::styles(); ?>


        <!-- Scripts -->
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

    </head>
    <body class="font-sans antialiased bg-light">
        <!--<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>-->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('BEqH0Lg')) {
    $componentId = $_instance->getRenderedChildComponentId('BEqH0Lg');
    $componentTag = $_instance->getRenderedChildComponentTagName('BEqH0Lg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BEqH0Lg');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('BEqH0Lg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <!-- Page Heading -->
       <!-- <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                 $header }}
            </div>
        </header>-->
        <?php echo $__env->make('botones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page Content -->
        <main class="container my-3">
            <?php echo e($slot); ?>

        </main>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>



        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /var/www/html/ministerio/resources/views/layouts/app.blade.php ENDPATH**/ ?>