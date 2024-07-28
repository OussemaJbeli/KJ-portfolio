<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>KJ-PORTFOLIO</title>

        <!-- axios -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <!--  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--  -->
        <link rel="icon" type="icon" href="/icon/logo_app/cash_icon-icons.com_51090.ico"> 
        <title inertia><?php echo e(config('app.name', 'Laravel')); ?></title>
        <!--  -->
        <page-component :success-message="<?php echo e(json_encode(session('success'))); ?>"></page-component>
        <!-- Scripts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=PT+Mono&display=swap" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/jquery.fancybox.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('fonts/icomoon/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('fonts/flaticon/font/flaticon.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/aos.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/styleBlogs.css')); ?>">

        <!-- blogs -->

        <script src="<?php echo e(asset('/js/jquery-3.4.1.min.js')); ?>"></script>

        <script src="<?php echo e(asset('/lib/wow/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/lib/easing/easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/lib/waypoints/waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/lib/typed/typed.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/lib/counterup/counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/lib/isotope/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/lib/lightbox/js/lightbox.min.js')); ?>"></script>

        <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
            <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js',"resources/js/Pages/{$page['component']}.vue"]); ?>
        <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->head; } ?>
    </head>
    <body>
        <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->body; } else { ?><div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div><?php } ?>
    </body>
</html>
<?php /**PATH C:\Users\OVERLORD\Desktop\kais portfolios\KJ-PORTFOLIO\resources\views/app.blade.php ENDPATH**/ ?>