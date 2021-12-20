
<?php $__env->startSection('title','recette'); ?>
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $Recettes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container-lg titreBandeauRecette">  
        <i class="fas fa-chevron-circle-down" id="arrowDownBandeauBlanc"></i>
        <h1 class="titreBandeau"> - <?php echo e($r->nom_recette); ?></h1>
    </div>
	<div class="pageBlanche container-lg ">
		<div class="row">
			<div class="container-images col-lg-4 col-md-6 mb-6">
				<img src="../Images/Pain.jpg" class=" ">
				<img src="../Images/Pain.jpg" class=" ">
				<img src="../Images/Pain.jpg" class=" ">
				<img src="../Images/Pain.jpg" class=" ">
			</div>
			<div class="container-description col-lg-7 col-md-6 mb-6">
				<div class="container-recap">
					<ul>
						<li> <span class="numero-etape">Temps de préparation :</span> <?php echo e($r->temps_preparation); ?></li>
						<li> <span class="numero-etape">Temps de cuisson : </span><?php echo e($r->temps_cuisson); ?></li>
						<li> <span class="numero-etape">Difficulté : </span><?php echo e($r->difficulte); ?></li>
						<li> <span class="numero-etape">Nombre de personne : </span><?php echo e($r->nb_personne); ?></li>
					</ul>
				</div>
				<div class="container-textDescription">
					<?php echo e($r->description_recette); ?>

				</div>
			</div>
		 </div>
		 <div class="row container-ingredients-etape">
			<div class="container-ingredients col-lg-3 col-md-6 mb-6">
				<ul>
					<?php $__currentLoopData = $Ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($i->nom_ingredient); ?> <?php echo e($i->quantite_ingredient); ?><?php echo e($i->unite); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<div class="container-etapes col-lg-9 col-md-6 mb-6">
				<h1 style="text-align: center;">Etapes de préparation</h1>
				<?php $__currentLoopData = $Etapes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php echo e($e->titre_etape); ?>

				</br>
					<span class="numero-etape"><?php echo e($e->id); ?>.</span> <?php echo e($e->texte_etape); ?>

				</br>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
		<footer class="footer-recette text-muted">Recette ajoutée par ... le ...</footer>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loicc\Documents\projet perso\Cuisine\resources\views/ficheRecette.blade.php ENDPATH**/ ?>