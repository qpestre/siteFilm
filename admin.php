<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Films à l'affiche</title>
		<link href="css/style.css" rel="stylesheet"/>
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<?php
		include('functions.php');
		?>
	</head>

	<body>
		<!-- ENTETE AVEC MENU DEROULANT -->
		<header>
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="row">
						
						<!-- Titre -->
						<div class="col-sm-3 col-xs-3">
							<a href="index.php">
								<p><span class="glyphicon glyphicon-film"></span> Film à l'annonce :</p>
							</a>
						</div>
						<!--Menu deroulant-->
						<div class="col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-4">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<?php
								?>
								Menu                      <!-- titre à genere par php avec le pseudo du gens connecté-->
		        				<span class="caret"></span> <!-- petit bouton descendant-->
		        			</a>
					        <ul class="dropdown-menu">
					          <li><a href="login.php">Se connecter</a></li>
					        </ul>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<section class="premiereSection">
			<article>
				<p><br /><br /><br /><br />
					Veuillez choisir votre action :
					<ul>
						
							
								<form action="ajoutFilm.php" method="POST" enctype='multipart/form-data'>
									<div class="container ajoutFilm">
										<li>
											Ajouter un film :<br />
									
											<input type="textbox" name="mov_title" />
											<label for="mov_title">Nom du Film</label><br/>


											<input type="textbox" name="mov_director" />
											<label for="mov_director">Réalisateur </label><br/>

											<input type="number" name="mov_year" />
											<label for="mov_year">Année du film </label><br/>

											<input type="textbox" name="mov_description_short" />
											<label for="mov_description_short">Description courte</label><br/>

											<input type="textbox" name="mov_description_long" />
											<label for="mov_description_long">Description longue</label><br/>

											<input type="textbox" name="mov_image" />
											<label for="mov_image"> Nom du fichier image</label><br/>
											<label for="file_image">Affiche du film : </label>
											<input type="file" name="file_image" /><br/><br/>

										</li>
									</div>
										<input type="submit" class="button" value="Mettre en ligne" />
								</form>
							
						
					</ul>
				</p>
			</article>

		</section>






				<!-- BAS DE PAGE -->
		<footer>
			<?php
			 	footer();
			?>
			<!--
			<hr />
			<p class="centered">
				Construit avec ❤ par Quentin Pestre-Sorge.
			</p>
		-->
		</footer>
	</body>

</html>