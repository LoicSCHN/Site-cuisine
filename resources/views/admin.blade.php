@extends('layouts.app')
@section('title','admin')
@section('content')	
    <div class="container-lg titreBandeauRecette">  
        <i class="fas fa-chevron-circle-down" id="arrowDownBandeauBlanc"></i>
        <h1 class="titreBandeau"> - Administration</h1>
    </div>
    <div class="pageBlanche container-lg ">
	    <div class="btn-group" role="group" aria-label="Basic example">
		  <a type="button" class="btn btn-secondary" href="{{url("/admin/acceuil")}}">Acceuil</a>
		  <a type="button" class="btn btn-secondary" href="{{url("/admin/messages")}}">Recettes en attente de validation (0)</a>
		  <a type="button" class="btn btn-secondary" href="{{url("/admin/utilisateurs")}}">Utilisateurs</a>
		  <a type="button" class="btn btn-secondary" href="{{url("/admin/premiere_page")}}">Première page</a>
		  <a type="button" class="btn btn-secondary" href="{{url("/admin/a_propos")}}">A propos</a>
		  <a type="button" class="btn btn-secondary" href="{{url("/admin/infosPersos")}}">Mes informations personnelles</a>
		   <a type="button" class="btn btn-secondary" href="{{url("/admin/modifierProduit")}}">Modifier un produit</a>
		   <a type="button" class="btn btn-secondary" href="{{url("/admin/ajouterProduit")}}">Ajouter un produit</a>
		</div>
	
		<p>Nombre d'inscrit sur le site :</p>
		<p>Nombre de recette : </p>
		<p>Nombre de visiteur :</p>
	</div>
@endsection