<?php

	require("connectBDD.php");
/*
	$req1="SELECT DISTINCT MAX(mov_id) FROM movie";
	$newId=$bdd->query($req1);
	foreach($newId as $ligne)
	{
		$newID=$ligne;
	}
	*/

	//echo "$newID";

	if ($_FILES["file_image"]["error"] > 0) echo "Erreur lors du transfert de ";
	//echo $_FILES["file_image"]["name"];

	$requete="INSERT INTO movie VALUES (4, $_POST[mov_title]), $_POST[mov_description_short]), $_POST[mov_description_long]),$_POST[mov_director]),$_POST[mov_year]),$_POST[mov_movie])";

	try
	{
		$Resultat=bdd->query($requete);
	}
	catch(Exception $e){
		echo "L'upload n'a pas fonctionné.";
	}



		
	$nom = "images/".$_FILES['file_image']['name'];
	$resultat = move_uploaded_file($_FILES["file_image"]["tmp_name"],$nom);
	if ($resultat) echo "Transfert réussi";

	





	

	echo "<br/><a href=\"index.php\">Revenir à l'accueil</a>";



?>