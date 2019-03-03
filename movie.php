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
			<nav class="navbar navbar-default " role="navigation">
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


		<div class="container">
			<div class="row">
				<section class= "carte">
					<p><br/><br/></p>
					<?php
						affichageArticleComplet();
					?>
				</section>
			</div>
		</div>

















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