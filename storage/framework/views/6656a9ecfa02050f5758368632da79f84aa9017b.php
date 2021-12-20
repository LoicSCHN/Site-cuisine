
<?php $__env->startSection('title','user'); ?>
<?php $__env->startSection('content'); ?>	
	<div class="container-lg titreBandeauRecette">  
        <i class="fas fa-chevron-circle-down" id="arrowDownBandeauBlanc"></i>
        <h1 class="titreBandeau"> - Mon tableau de bord</h1>
    </div>
    <div class="pageBlanche container-lg ">
	    <div class="btn-group menuUser" role="group" aria-label="Basic example">
		  	<a type="button" class="btn btn-secondary" href="<?php echo e(url("/pageUtilisateur/acceuil")); ?>">Acceuil</a>
		  	<a type="button" class="btn btn-secondary" href="<?php echo e(url("/pageUtilisateur/messages")); ?>">Mes recettes</a>
		  	<a type="button" class="btn btn-secondary" href="<?php echo e(url("/pageUtilisateur/messages")); ?>">Mes recettes en attente (0)</a>
		  	<a type="button" class="btn btn-secondary" href="<?php echo e(url("/pageUtilisateur/ajouterRecette")); ?>">Ajouter une recette</a>
		</div>
    		<div class="pageBlanche container-lg ">
		  		<?php echo $__env->yieldContent('userPage'); ?>
		  	</div>
		
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loicc\Documents\projet perso\Cuisine\resources\views/pageUtilisateur.blade.php ENDPATH**/ ?>