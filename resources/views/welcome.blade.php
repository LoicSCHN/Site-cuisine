@extends('layouts.app')
@section('title','Home')
@section('content')
    <div class="bandeauBlancPP">  
        <i class="fas fa-chevron-circle-down" id="arrowDownBandeauBlanc"></i>
        <h1 class="titreBandeau"> - Les recettes du moment</h1>
    </div>
     
    <section class="containerRecettesPremierePage">
        <div class="row">
          <!-- /.col-lg-3 -->
          <div class="col-lg-12">
            <div class="row"> 
                @foreach($Recettes as $recette)
                @php
                $a = "";
                @endphp

                @for ($i = 0; $i < $recette->id; $i++)
                  @php
                    $a = $a."a";
                  @endphp
                @endfor
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="recettePremierePage card text-center">
                        <img src="../Images/Pain.jpg" class=" mx-auto d-block">
<!--                         <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div> -->
                        <div class="card-body">
                            <h4 class="card-title">
                                  {{$recette->nom_recette}}
                            </h4>

                            <a class="voirPlus" type="button" data-bs-toggle="offcanvas" data-bs-target="#{{$a}}" aria-controls="{{$a}}">Voir la recette en entier</a>
                            <div class="card-footer text-muted footerCard" id="footer-recettes">
                                @foreach($Users as $user)
                                    @if($user->id == $recette->user_id)
                                        Recette ajoutée par {{$user->name}} le {{date('d-m-Y', strtotime($recette->created_at))}}
                                    @endif
                                @endforeach
                            </div>
<!-- --------------------------------- OFFCANVAS --------------------------------------->

                            <div class="offcanvas offcanvas-end" tabindex="-1" id="{{$a}}" aria-labelledby="offcanvasRightLabel">
                              <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">{{$recette->nom_recette}}</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body">
                                <img src="../Images/Pain.jpg" class=" mx-auto d-block">
                                {{$recette->description_recette}}
                                <a href="{{url('/recettes/'.$recette->id)}}">Voir les étapes de la recette</a>
                                </div>
                            </div>  

<!------------------------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        
    </section>
@endsection
