@extends('layouts.app')
@section('title','recette')
@section('content')
@foreach($Recettes as $r)
    <div class="container-lg titreBandeauRecette">  
        <i class="fas fa-chevron-circle-down" id="arrowDownBandeauBlanc"></i>
        <h1 class="titreBandeau"> - {{$r->nom_recette}}</h1>
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
						<li> <span class="numero-etape">Temps de préparation :</span> {{$r->temps_preparation}}</li>
						<li> <span class="numero-etape">Temps de cuisson : </span>{{$r->temps_cuisson}}</li>
						<li> <span class="numero-etape">Difficulté : </span>{{$r->difficulte}}</li>
						<li> <span class="numero-etape">Nombre de personne : </span>{{$r->nb_personne}}</li>
					</ul>
				</div>
				<div class="container-textDescription">
					{{$r->description_recette}}
				</div>
			</div>
		 </div>
		 <div class="row container-ingredients-etape">
			<div class="container-ingredients col-lg-3 col-md-6 mb-6">
				<ul>
					@foreach($Ingredients as $i)
					<li>{{$i->nom_ingredient}} {{$i->quantite_ingredient}}{{$i->unite}}</li>
					@endforeach
				</ul>
			</div>
			<div class="container-etapes col-lg-9 col-md-6 mb-6">
				<h1 style="text-align: center;">Etapes de préparation</h1>
				@foreach($Etapes as $e)
					{{$e->titre_etape}}
				</br>
					<span class="numero-etape">{{$e->id}}.</span> {{$e->texte_etape}}
				</br>
				@endforeach
			</div>
		</div>
		<footer class="footer-recette text-muted">Recette ajoutée par ... le ...</footer>
	</div>
@endforeach
@endsection