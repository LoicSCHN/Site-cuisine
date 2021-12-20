
<?php $__env->startSection('title','admin'); ?>
<?php $__env->startSection('content'); ?>	
    <div class="container-lg titreBandeauRecette">  
        <i class="fas fa-chevron-circle-down" id="arrowDownBandeauBlanc"></i>
        <h1 class="titreBandeau"> - Administration</h1>
    </div>
    <div class="pageBlanche container-lg ">
	    <div class="btn-group" role="group" aria-label="Basic example">
		  <a type="button" class="btn btn-secondary" href="<?php echo e(url("/admin/acceuil")); ?>">Acceuil</a>
		  <a type="button" class="btn btn-secondary" href="<?php echo e(url("/admin/messages")); ?>">Recettes en attente de validation (0)</a>
		  <a type="button" class="btn btn-secondary" href="<?php echo e(url("/admin/utilisateurs")); ?>">Utilisateurs</a>
		  <a type="button" class="btn btn-secondary" href="<?php echo e(url("/admin/premiere_page")); ?>">Première page</a>
		  <a type="button" class="btn btn-secondary" href="<?php echo e(url("/admin/a_propos")); ?>">A propos</a>
		  <a type="button" class="btn btn-secondary" href="<?php echo e(url("/admin/infosPersos")); ?>">Mes informations personnelles</a>
		   <a type="button" class="btn btn-secondary" href="<?php echo e(url("/admin/modifierProduit")); ?>">Modifier un produit</a>
		   <a type="button" class="btn btn-secondary" href="<?php echo e(url("/admin/ajouterProduit")); ?>">Ajouter un produit</a>
		</div>
	
		<p>Nombre d'inscrit sur le site :</p>
		<p>Nombre de recette : </p>
		<p>Nombre de visiteur :</p>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loicc\Documents\projet perso\Cuisine\resources\views/admin.blade.php ENDPATH**/ ?>