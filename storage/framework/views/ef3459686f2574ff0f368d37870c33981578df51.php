<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Cuisine/<?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        

        <!-- Styles -->

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/7a016b18d6.js"></script>
               
          <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
       
          <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>"/>  
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
        <body class="font-sans ">

            <header class="">
                <!-- <div class="top"></div> -->
                <div class="logo top">
                    <div></div>
                </div>
                <div class="titre top">
                    <h1>E + L = recettes de KliT</h1>
                </div>
                <div class="connexion top">
                <?php if(Route::has('login')): ?>
                    <div class="   px-6 py-4 sm:block">
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/navigation')); ?>" class="text-sm text-white-700 ">Tableau de bord</a>         
                            <button class="flex items-center text-sm font-medium text-white-500 hover:text-white-700 hover:border-white-300 focus:outline-none focus:text-white-700 focus:border-white-300 transition duration-150 ease-in-out">
                                <div><?php echo e(Auth::user()->name); ?></div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                               
                            </button>
                            <!-- Authentication -->
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                                    this.closest(\'form\').submit();']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                    this.closest(\'form\').submit();']); ?>
                                    <?php echo e(__('Se deconnecter')); ?>

                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </form>      
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="text-sm text-white-700 ">Se connecter</a>
                                </br>
                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="text-sm text-white-700 ">Créer un compte</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                </div>
                </div>
                </header>
                 <section class="page container-fluid" id="app">
                  <?php echo $__env->yieldContent('content'); ?>

                </section>
            

       <footer>&copy; CCLS-2020</footer>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH C:\Users\Loïc\Documents\Projet perso\Cuisine\resources\views/layouts/app.blade.php ENDPATH**/ ?>