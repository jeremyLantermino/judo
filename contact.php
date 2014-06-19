<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-md-offset-3">
				<div class="form-group">
						<label class="col-md-4"> nom: </label>
						<div class="col-md-8" >
							<div class="col-md-8">
								<div style="display">
									<input type="text" name="nom" id="nom" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4"> prénom: </label>
						<div class="col-md-8" >
							<div class="col-md-8">
								<div style="display">
									<input type="text" name="prenom" id="prenom" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4"> votre adresse mail: </label>
						<div class="col-md-8" >
							<div class="col-md-8">
								<div style="display">
									<input type="text" name="adresse" id="adresse" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4"> sujet du mail: </label>
						<div class="col-md-8" >
							<div class="col-md-8">
								<div style="display">
									<input type="text" name="sujet" id="sujet" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4"> votre message: </label>
						<textarea class="form-control col-md-3" rows="5" name="message" required></textarea>
					</div>
					<div class="form-group">
						<div class="col-md-12">
						  <button type="submit" name="envoer" class="btn btn-default" onsubmit>envoyer</button>
						</div>
					</div>
					<?php
						if(isset($_POST['envoyer']))
						{
							$mail = 'jeremylantermino@orange.fr'; // Déclaration de l'adresse de destination.
							$message=$_POST['message'];
							$sujet=$_POST['sujet'];
							$expediteur=$_POST['adresse'];
							$nom=$_POST['nom'];
							$prenom=$_POST['prenom'];


							if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
							{
								$passage_ligne = "\r\n";
							}
							else
							{
								$passage_ligne = "\n";
							}

							//=====Création de la boundary
							$boundary = "-----=".md5(rand());
							//==========
							 
							//=====Création du header de l'e-mail.
							$header = "From: \"$nom $prenom\"<$expediteur>".$passage_ligne;
							$header.= "Reply-to: \"jeremyL\" <jeremylantermino@orange.fr>".$passage_ligne;
							$header.= "MIME-Version: 1.0".$passage_ligne;
							$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
							//==========
							 
							//=====Création du message.
							$message = $passage_ligne."--".$boundary.$passage_ligne;
							//=====Ajout du message au format texte.
							$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_txt.$passage_ligne;
							//==========
							$message.= $passage_ligne."--".$boundary.$passage_ligne;
							//=====Ajout du message au format HTML
							$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
							$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
							$message.= $passage_ligne.$message_html.$passage_ligne;
							//==========
							$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
							$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
							//==========
							 
							//=====Envoi de l'e-mail.
							mail($mail,$sujet,$message,$header);
							//==========
						}
					?>
				</div>	
			</div>
		</div>
	</div>
</section>