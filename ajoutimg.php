
        <nav id="topnav" class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="menu">
                        <div class="col-md-3"><a href="ajoutactu.php">ajouter une actualitée</a></div>
						<div class="col-md-3"><a href="ajoutevent.php">ajouter un évènement</a></div>
						<div class="col-md-3"><a href="ajoutresult.php">ajouter un résultat</a></div>
						<div class="col-md-3"><a href="ajoutimg.php">ajout d'une photo</a></div>
                </div>
            </div>
        </nav>
   
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Ajout d'une image</h1>
                    </div>
                </div>
            </div>
        </header>
        
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Formulaire d'ajout d'une image -->
						<form class="form-horizontal" role="form" action="ajout.php" method="post">
							<div class="col-md-6 col-md-offset-3">
								entrer le lien de l'image:
								<input type="text" name="ajoutimg" id="ajoutimg" class="form-control" required>
							</div>
							<div class="col-md-12">
								<button type="submit" name="enregistrer" class="btn btn-default" onsubmit>Enregistrer</button>
							</div>
						</form>
					</div>
                </div>
            </div>
        </section>