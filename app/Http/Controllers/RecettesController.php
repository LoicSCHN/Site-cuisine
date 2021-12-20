<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Recettes;
use DB;

class RecettesController extends Controller
{
    public static function allRecepies() {
        return view ("welcome", ['Recettes'=> Recettes::allRecepies(), 'Users'=> UserController::loadUtilisateur() ] );
    }

    public static function RecetteById($id){
        $Recettes = Recettes::RecetteById($id);
        foreach($Recettes as $r)
            $id = $r->id;
        return view("ficheRecette", ['Recettes'=> $Recettes, 'Ingredients'=> Recettes::IngredientRecetteById($id), 'Etapes'=> Recettes::EtapeRecetteById($id)]);
    }

    public static function formAddRecette(){
        return view ("formAddRecette");
    }

    public static function addRecette(Request $request){
        Recettes::addRecette($request);
        return view("showRecette");
    }
}
