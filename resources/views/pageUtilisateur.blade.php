@extends('layouts.app')
@section('title','user')
@section('content')	
	<div class="container-lg titreBandeauRecette">  
        <i class="fas fa-chevron-circle-down" id="arrowDownBandeauBlanc"></i>
        <h1 class="titreBandeau"> - Mon tableau de bord</h1>
    </div>
    <div class="pageBlanche container-lg ">
	    <div class="btn-group menuUser" role="group" aria-label="Basic example">
		  	<a type="button" class="btn btn-secondary" href="{{url("/pageUtilisateur/acceuil")}}">Acceuil</a>
		  	<a type="button" class="btn btn-secondary" href="{{url("/pageUtilisateur/messages")}}">Mes recettes</a>
		  	<a type="button" class="btn btn-secondary" href="{{url("/pageUtilisateur/messages")}}">Mes recettes en attente (0)</a>
		  	<a type="button" class="btn btn-secondary" href="{{url("/pageUtilisateur/ajouterRecette")}}">Ajouter une recette</a>
		</div>
    		<div class="pageBlanche container-lg ">
		  		@yield('userPage')
		  	</div>
		
	</div>

@endsection