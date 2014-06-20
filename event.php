<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<div class="col-md-6 col-md-offset-3">
					<div class="prem">
						<h3>les évènements:</h3></br>
						<?php
							$bdd = new PDO("mysql:host=localhost;dbname=projetjudo", 'root', '');
							$requete = $bdd->query("SELECT nom, prenom, datepublication, description
							FROM membres, evenements WHERE num = numMembre ORDER BY datepublication DESC");
							
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
</section>