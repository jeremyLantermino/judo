<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-5">
					<div class="col-md-12">
						<div class="prem">
							<h3>les dernières <a href="index.php?page=actu.php">actualitées</a>:</h3></br>
							<?php
							$bdd = new PDO("mysql:host=localhost;dbname=projetjudo", 'root', '');
								$requete = $bdd->query("SELECT nom, prenom, datepublication, description
								FROM membres, actualitees WHERE num = numMembre ORDER BY datepublication DESC LIMIT 15");
								
								while($row = $requete->fetch())
								{
									$nom = $row['prenom'].' '.$row['nom'];
									$date = $row['datepublication'];
									$desc = $row['description'];
									
									//On remet la date façon fr
									$date = explode("-",$date);
									$date = $date[2].'/'.$date[1].'/'.$date[0];
									
									
									echo"le $date publié par $nom:</br> $desc </br>";
								}
								
								$requete=null;
								$bdd=null;
							?>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-1">
					<div class="col-md-12">
						<div class="prem">
							<div class="col-md-2">
								<img src="image/sylvain.jpg" width="75px">
							</div>
							<div class="col-md-4">
								300 adhérents</br>
								20 ceintures noires
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="prem">
								<h3><a href="index.php?page=event.php">évènements</a> a venir:</h3></br>
								<?php
									$bdd = new PDO("mysql:host=localhost;dbname=projetjudo", 'root', '');
									$requete = $bdd->query("SELECT nom, prenom, datepublication, description
									FROM membres, evenements WHERE num = numMembre ORDER BY datepublication DESC LIMIT 3");
									
									while($row = $requete->fetch())
									{
										$nom = $row['prenom'].' '.$row['nom'];
										$date = $row['datepublication'];
										$desc = $row['description'];
										
										//Pour la date
										//On remet la date façon fr
										$date = explode("-",$date);
										$date = $date[2].'/'.$date[1].'/'.$date[0];
										
										
										echo"le $date publié par $nom :</br> $desc </br>";
									}
									
									$requete=null;
									$bdd=null;
								?>
								
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="prem">
								<h3>derniers <a href="index.php?page=result.php">résultats:</a></h3></br>
								<?php
									$bdd = new PDO("mysql:host=localhost;dbname=projetjudo", 'root', '');
									$requete = $bdd->query("SELECT nom, prenom, datepublication, description
									FROM membres, resultats WHERE num = numMembre ORDER BY datepublication DESC LIMIT 3");
									
									while($row = $requete->fetch())
									{
										$nom = $row['prenom'].' '.$row['nom'];
										$date = $row['datepublication'];
										$desc = $row['description'];
										
										//Pour la date
										//On remet la date façon fr
										$date = explode("-",$date);
										$date = $date[2].'/'.$date[1].'/'.$date[0];
										
										
										echo"le $date publié par $nom :</br> $desc </br>";
									}
									
									$requete=null;
									$bdd=null;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>