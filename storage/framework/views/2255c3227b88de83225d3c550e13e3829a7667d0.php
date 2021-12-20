
<?php $__env->startSection('title','user/ajouter une recette'); ?>
<?php $__env->startSection('userPage'); ?>	
	<form method="post" action="<?php echo e(url("/pageUtilisateur/ajouterRecette/show")); ?>">
	  	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >
		<input class="form-control form-control-lg inputNomRecette" type="text" name="nomRecette" placeholder="Nom de la recette" aria-label="Titre de la recette">
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
							<li> 
								<div class="row g-3 align-items-center">
								  <div class="col-auto">
								    <label for="inputPassword6" class="col-form-label"><span class="numero-etape">Temps de préparation : </span></label>
								  </div>
								  <div class="col-auto">
								    <input type="time" id="appt" name="tPrepa" min="00:00" max="18:00" >
								  </div>
								  <div class="col-auto">
								    <span id="passwordHelpInline" class="form-text">
								      Donnez une approximation du temps de préparation.
								    </span>
								  </div>
								</div>
							</li>
							<li> 
								<div class="row g-3 align-items-center">
								  <div class="col-auto">
								    <label for="inputPassword6" class="col-form-label"><span class="numero-etape">Temps de cuisson : </span></label>
								  </div>
								  <div class="col-auto">
								    <input type="time" id="appt" name="tCuisson" min="00:00" max="18:00" >
								  </div>
								  <div class="col-auto">
								    <span id="passwordHelpInline" class="form-text">
								      Ne pas toucher s'il n'y a aucun temps de cuisson.
								    </span>
								  </div>
								</div>
							</li>
							<li> <span class="numero-etape">Difficulté : </span>
								<select class="form-select" aria-label="Default select example" name="difficulte">
								    <option value="facile"selected>Facile</option>
								    <option value="intermédiaire">Intermédiaire</option>
								    <option value="difficile">Difficile</option>
								  </select>
							</li>
							<li> 
								<div class="row g-3 align-items-center">
								  <div class="col-auto">
								    <label for="inputPassword6" class="col-form-label"><span class="numero-etape">Nombre de personne : </span></label>
								  </div>
								  <div class="col-auto">
								    <input type="number" placeholder="1" id="tentacles" name="nbPersonne" min="1" max="10">
								  </div>
								</div>
							</li>
						</ul>
					</div>
					<div class="container-textDescription">
						 <label for="exampleFormControlTextarea1" class="form-label">Description de la recette</label>
	  					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
					</div>
				</div>
			 </div>
			 <div class=" container-ingredients-etape">
				<div id="container-ingredients" class="container-ingredients col-lg-12 col-md-12 mb-12">
					<h1 style="text-align: center;">Ingredients</h1>
					<div id="listeIngredients"></div>
					</br>
					<button type="button" class="btn btn-outline-success" onclick="ajouterInput_text()">Ajouter un ingrédient</button>
					<button type="button" class="btn btn-outline-danger" id="btn_enlever" onclick="enleverInput_text()">Supprimer</button>

					<script>
					var id = 0;
					var idq = 0;
					var idu = 0;
					var btn_enlever = document.getElementById("btn_enlever");
					var container = document.getElementById("listeIngredients");
					btn_enlever.disabled = true;

					var nbIngredient = document.createElement("input");
					nbIngredient.setAttribute("type", "hidden");
					nbIngredient.setAttribute("name", "nbIngredient");
					document.getElementById("container-ingredients").appendChild(nbIngredient);

					function ajouterInput_text() 
					{
					id++;
					idq++;
					idu++;
					nbIngredient.setAttribute("value", id);
					btn_enlever.disabled = false;
					// Création de la div qui va servir de ligne
					
					var line = document.createElement("div");
					container.appendChild(line);
					line.setAttribute("id", id+"nbIngredient");
					line.setAttribute("class","line");

					//Nom de l'ingrédient
					var input = document.createElement("input");
					input.setAttribute("type", "text");
					input.setAttribute("id", id+"input");
					input.setAttribute("size","10px");
					input.setAttribute("placeholder", "Ingrédient");
					input.setAttribute("name", id+"Ingredient")
					line.appendChild(input);
					line.innerHTML+= "	";
					//Quantité
					var quantite = document.createElement("input");
					quantite.setAttribute("type", "text");
					quantite.setAttribute("id", idq+"quantite");
					quantite.setAttribute("size","3px");
					quantite.setAttribute("placeholder", "Quantité");
					quantite.setAttribute("name", idq+"Quantite")
					line.appendChild(quantite);
					line.innerHTML+= "	";
					//Unité : inout select
					var unite = document.createElement("select");

					var rien = document.createElement("option");
					rien.setAttribute("value","unité")
					rien.innerHTML = "	";

					var g = document.createElement("option");
					g.setAttribute("value","g")
					g.innerHTML = "g";

					var cl = document.createElement("option");
					cl.setAttribute("value","cl")
					cl.innerHTML = "cl";

					var dl = document.createElement("option");
					dl.setAttribute("value","dl")
					dl.innerHTML = "dl";

					var cc = document.createElement("option");
					cc.setAttribute("value","Cuillère à café")
					cc.innerHTML = "Cuillère à café";

					var cs = document.createElement("option");
					cs.setAttribute("value","Cuillère à soupe")
					cs.innerHTML = "Cuillère à soupe";

					var p = document.createElement("option");
					p.setAttribute("value","Pincée")
					p.innerHTML = "Pincée";

					unite.appendChild(rien);
					unite.appendChild(g);
					unite.appendChild(cl);
					unite.appendChild(dl);
					unite.appendChild(cc);
					unite.appendChild(cs);
					unite.appendChild(p);

					unite.setAttribute("id", idu+"unite");
					unite.setAttribute("name", idu+"Unite");
					unite.setAttribute("placeholder", "Input id numéro " + idu);
					line.appendChild(unite);
					line.innerHTML+= "</br>";
					}
					
					function enleverInput_text() 
					{
						if (id > 0) {
							container.removeChild(container.lastChild);
							id--;
							idq--;
							idu--;
							nbIngredient.setAttribute("value", id);
							if(id==0){
								btn_enlever.disabled = true;
							}
						}

					}
					</script>
				</div>
				<div id="container-etapes" class="container-etapes col-lg-12 col-md-12 mb-12">
					<h1 style="text-align: center;">Etapes de préparation</h1>
						
					</br>
						<div id="listeEtape"></div>
						<!-- <span class="numero-etape">id.</span> texte -->
					</br>
				</div>
					<button type="button" class="btn btn-outline-success" onclick="ajouter_Etape()">Ajouter une étape</button>
					<button type="button" class="btn btn-outline-danger" id="btn_enlever_etape" onclick="enlever_Etape() ">Supprimer une étape</button>

					<script>
					var idE = 0;
					var titreEtape = 0;
					var texteE = 0;

					var btn_enlever_etape = document.getElementById("btn_enlever_etape");
					var containerEtape = document.getElementById("listeEtape");
					btn_enlever_etape.disabled = true;

					var nbEtape = document.createElement("input");
					nbEtape.setAttribute("type", "hidden");
					nbEtape.setAttribute("name", "nbEtape");
					document.getElementById("container-etapes").appendChild(nbEtape);

					function ajouter_Etape() 
					{
					idE++;
					titreEtape++;
					texteE++;
					nbEtape.setAttribute("value", idE);
					
					btn_enlever_etape.disabled = false;
					// Création de la div qui va servir de ligne
					
					var line = document.createElement("div");
					containerEtape.appendChild(line);
					line.setAttribute("id", idE+"nbEtape");
					line.setAttribute("class","lineEtape");

					//Numéro d'étape
					var input = document.createElement("span");
					input.setAttribute("class", "numero-etape");
					input.setAttribute("id", idE+"etape");
					input.setAttribute("name", idE+"Etape");
					input.innerHTML = idE+" : ";
					line.appendChild(input);
					line.innerHTML+= "	";

					//Titre étape
					var titreEtape = document.createElement("input");
					titreEtape.setAttribute("type", "text")
					titreEtape.setAttribute("size","10px");
					titreEtape.setAttribute("id", idE+"numEtape");
					titreEtape.setAttribute("name", idE+"TitreEtape");
					//titreEtape.setAttribute("class","form-control");
					titreEtape.setAttribute("placeholder", "Titre de l'étape");
					line.appendChild(titreEtape);

					//Texte après le titre
					var texteFacultatif = document.createElement("span");
					texteFacultatif.setAttribute("class", "form-text");
					texteFacultatif.setAttribute("id", "passwordHelpInline");
					texteFacultatif.setAttribute("name", titreEtape+"TitreEtape");
					texteFacultatif.innerHTML+= "   Facultatif ";
					line.appendChild(texteFacultatif);

					//Texte étape
					var texteEtape = document.createElement("textarea");
					texteEtape.setAttribute("id", texteE+"numEtape");
					texteEtape.setAttribute("class","form-control");
					texteEtape.setAttribute("placeholder", "Texte de l'étape");
					texteEtape.setAttribute("name", idE+"TexteEtape");
					line.appendChild(texteEtape);

					}

					function enlever_Etape() 
					{
						if (idE > 0) {
							containerEtape.removeChild(containerEtape.lastChild);
							idE--;
							titreEtape--;
							texteE--;
							nbEtape.setAttribute("value", idE);
							if(idE==0){
								btn_enlever_etape.disabled = true;
							}
						}
						return false;	
					}
					</script>
			</div>
			
			<div class="d-grid gap-2">
				<input type="submit" name="" class="btn btn-success bouttonEnvoyerRecette" href="<?php echo e(url("/pageUtilisateur/ajouterRecette/show")); ?>">
			</div>
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pageUtilisateur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loicc\Documents\projet perso\Cuisine\resources\views/formAddRecette.blade.php ENDPATH**/ ?>