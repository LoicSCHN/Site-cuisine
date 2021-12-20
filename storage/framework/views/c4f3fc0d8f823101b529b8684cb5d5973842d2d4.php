<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>
    <div class="bandeauBlancPP">  
        <i class="fas fa-chevron-circle-down" id="arrowDownBandeauBlanc"></i>
        <h1 class="titreBandeau"> - Les recettes du moment</h1>
    </div>
     
    <section class="containerRecettesPremierePage">
        <div class="row">
          <!-- /.col-lg-3 -->
          <div class="col-lg-12">
            <div class="row"> 
                <?php $__currentLoopData = $Recettes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recette): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $a = "";
                ?>

                <?php for($i = 0; $i < $recette->id; $i++): ?>
                  <?php
                    $a = $a."a";
                  ?>
                <?php endfor; ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="recettePremierePage card text-center">
                        <img src="../Images/Pain.jpg" class=" mx-auto d-block">
<!--                         <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div> -->
                        <div class="card-body">
                            <h4 class="card-title">
                                  <?php echo e($recette->nom_recette); ?>

                            </h4>

                            <a class="voirPlus" type="button" data-bs-toggle="offcanvas" data-bs-target="#<?php echo e($a); ?>" aria-controls="<?php echo e($a); ?>">Voir la recette en entier</a>
                            <div class="card-footer text-muted footerCard" id="footer-recettes">
                                <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($user->id == $recette->user_id): ?>
                                        Recette ajoutée par <?php echo e($user->name); ?> le <?php echo e(date('d-m-Y', strtotime($recette->created_at))); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
<!-- --------------------------------- OFFCANVAS --------------------------------------->

                            <div class="offcanvas offcanvas-end" tabindex="-1" id="<?php echo e($a); ?>" aria-labelledby="offcanvasRightLabel">
                              <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel"><?php echo e($recette->nom_recette); ?></h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body">
                                <img src="../Images/Pain.jpg" class=" mx-auto d-block">
                                <?php echo e($recette->description_recette); ?>

                                <a href="<?php echo e(url('/recettes/'.$recette->id)); ?>">Voir les étapes de la recette</a>
                                </div>
                            </div>  

<!------------------------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
        
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loicc\Documents\projet perso\Cuisine\resources\views/welcome.blade.php ENDPATH**/ ?>