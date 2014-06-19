<?php
session_start();
if (!isset($_SESSION['identifiant']))
{
	header('location:connexion.php');
}
?>
   
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Ajout d'un résultat</h1>
                    </div>
                </div>
            </div>
        </header>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<?php
							try
							{
								// Create connection
								$bdd = new PDO("mysql:host=localhost;dbname=projetjudo", 'root', ''); // connexion à la BDD
							}
							catch(Exception $e)
							{
								// En cas d'erreur, on affiche un message et on arrête tout
								die('Erreur : '.$e->getMessage());
							}
							if (isset($_POST['ajout']))
							{

								$description = $_POST['description'];
								if ($_POST['date'] != NULL){
								$date= $_POST['date'];
								$date=explode("/",$date);
								$final_date=$date[2].'-'.$date[1].'-'.$date[0];
								}
								else
								{
									$final_date='0000-00-00';
								}

								$ajouteur= $_POST['rapporteur'];
								$sql="INSERT INTO `resultats` VALUES ('', '$final_date', '$description','$ajouteur')";
								echo"le résultat à bien été ajouté </br>";
								$bdd->exec($sql);
								$bdd=null;
							}
						?>
                        <!-- Formulaire d'ajout d'une actualité -->
						<form class="form-horizontal" role="form" action="index1.php?page=ajoutresult.php" method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-4" > Nom/Prénom de l'ajouteur : </label> <!-- Pour mettre "Rapporteur" (a l'aide d'un label) a coter de la liste deroulante on fractionne l'ecran en 4-8 (4 pour "rapporteur" et 8 pour la liste deroulante -->
									<div class="col-md-8" >
										<select class="form-control" name="rapporteur">  <!-- GRID option (pour fractionner l'ecran et y inserer des données ) -->
											<?php
												$bdd = new PDO("mysql:host=localhost;dbname=projetjudo", 'root', '');
												$requete = $bdd->query("SELECT num, prenom, nom FROM membres");
												
												while($row = $requete->fetch())
												{
													$nom = $row['prenom'].' '.$row['nom'];
													$id = $row['num'];
													echo"<option value='$id'> $nom </option>";
												}
												
												$requete=null;
												$bdd=null;
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-4" > Date de publication : </label>
									<div class="col-md-8" >
										<div class="col-md-8">
											<div id="date_cache" style="display">
												<input type="text" name="date" id="date" class="form-control" placeholder="JJ/MM/AAAA" required>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-md-4">Description du résultat : </label>
									<textarea class="form-control col-md-3" rows="5" name="description" required></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-md-12">
									  <button type="submit" name="ajout" class="btn btn-default" onsubmit>ajouter le résultat</button>
									</div>
								</div>
							</div>
						</form>
					</div>
                </div>
            </div>
        </section>