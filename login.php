<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Films à l'affiche</title>
		<link href="css/style.css" rel="stylesheet"/>
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>

		<?php
		include('functions.php');
		?>
	</head>

	<body>
		<!-- ENTETE AVEC MENU DEROULANT -->
		<header>
			<div class="container">
				<div class="row">
					<!-- TITRE -->
					<div class="col-sm-3 col-xs-3">
						<a href="index.php">
							<p><span class="glyphicon glyphicon-film"></span> Film à l'annonce :</p>
						</a>
					</div>
					<!--Menu deroulant-->
					<div class="col-sm-offset-4 col-sm-4 col-xs-offset-4 col-xs-4">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Menu
					                      <!-- ?titre à genere par php avec le pseudo du gens connecté-->
	        				<span class="caret"></span> <!-- petit bouton descendant-->
	        			</a>
				        <ul class="dropdown-menu">
				          <li><a href="login.php">Se connecter</a></li>
				        </ul>
					</div>
				</div>
			</div>
			<hr />
		</header>


		<!-- FOREACH DE LA BDD DES FILMS -->
		<!-- PHP -->
		<section>
			<h2 class="centered"> Connexion </h2>
			<form action="traitement.php" method="POST" class="form-signin form-horizontal">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<input type="text" name="login" class="form-control" placeholder="Entrez votre login" required></input>
						</div>
						<div class="col-sm-12 col-xs-12">
							<input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required></input>
						</div>
						<div class="col-sm-4 col-xs-4">
							<button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Se connecter</button>
						</div>
					</div>
				</div>
			</form>
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