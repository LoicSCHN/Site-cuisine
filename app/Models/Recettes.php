<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\ModelCreated;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use DB; 
class Recettes extends Model
{
    use HasFactory, Notifiable;
   	protected $table = "recettes";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function user()
	{
        return $this->belongsTo(User::class);
	}

    public static function allRecepies() {
        $Recettes = DB::table('recettes')
        ->select('recettes.*')
        ->get();

        return $Recettes;
    }

    public static function RecetteById($id){
        $Recettes = DB::table('recettes')
        ->where("recettes.id","=",$id)
        ->select('recettes.*')
        ->get();
        return $Recettes;
    }
        public static function IngredientRecetteById($id){
        $Ingredients = DB::table('ingredient_recette')
        ->where("ingredient_recette.id_recette","=",$id)
        ->select('ingredient_recette.*')
        ->get();
        return $Ingredients;
    }
        public static function EtapeRecetteById($id){
        $Etapes = DB::table('etape_recette')
        ->where("etape_recette.id_recette","=",$id)
        ->select('etape_recette.*')
        ->get();
        return $Etapes;
    }
    public static function addRecette($request){
            $id_recette = DB::table('recettes')->insertGetId(
                [
                    'nom_recette' => $request->nomRecette,
                    'user_id' => auth()->user()->id,
                    'description_recette' => $request->description,
                    'difficulte' => $request->difficulte,
                    'temps_preparation' => $request->tPrepa,
                    'temps_cuisson' => $request->tCuisson,
                    'nb_personne' => $request->nbPersonne
                 ]
            );
            for ($i=1; $i <= $request->nbIngredient; $i++) { 
                $nom = $i."Ingredient"; 
                $qte = $i."Quantite"; 
                $unite = $i."Unite";
                DB::table('ingredient_recette')->insert(
                [
                    'id_recette' => $id_recette,
                    'nom_ingredient' => $request->$nom,
                    'quantite_ingredient' => $request->$qte,
                    'unite' => $request->$unite
                 ]
                );
            }
            for ($i=1; $i <= $request->nbEtape; $i++) { 
                $titre = $i."TitreEtape"; 
                $texte = $i."TexteEtape";
                DB::table('etape_recette')->insert(
                [
                    'id_recette' => $id_recette,
                    'titre_etape' => $request->$titre,
                    'texte_etape' => $request->$texte
                 ]
                );
            }
            
    
    }
}
