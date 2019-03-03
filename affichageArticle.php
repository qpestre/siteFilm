<?php

	

	function affichageArticle()
	{
		require("connectBDD.php");
		$myQuery="SELECT * FROM movie";
		$result=$bdd->query($myQuery);
		

		while($ligne = $result->fetch())
		{
			echo "<article class=\"carte\">";
			echo "<p><br/><br/><br/></p>";
			echo "<a href=\"movie.php?id=$ligne[mov_id]\"><h2>$ligne[mov_title]</h2></a>";
			echo "<p>$ligne[mov_description_short]</p><br/>";
			echo "</article>";
		}	
	}




	function affichageArticleComplet()
	{
		require("connectBDD.php");
		$myQuery="SELECT * FROM movie";
		$result=$bdd->query($myQuery);
		

		while($ligne = $result->fetch())
		{
			if($ligne['mov_id']==$_GET['id'])
			{
				echo "<aside class=\"col-sm-6\">";
				echo "<img src=\"images/$ligne[mov_image]\" alt=\"$ligne[mov_title]\" title=\"$ligne[mov_title]\" />";
				//echo "$ligne[mov_image]";
				echo"</aside>";


				echo "<article class=\"col-sm-6\">";
				echo "<h2>$ligne[mov_title]</h2>";
				echo "<h3>$ligne[mov_director], $ligne[mov_year]</h3>";
				echo "<p>$ligne[mov_description_long]</p><br/>";
				echo "</article>";
			}
		}	

	}
?>