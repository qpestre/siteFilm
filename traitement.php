<?php


		require("connectBDD.php");

		$myQuery="SELECT * FROM user";
		$result=$bdd->query($myQuery);
		
		$test=false;

		while($ligne = $result->fetch())
		{
			if($_POST['login']==$ligne['usr_login'] && $_POST['password']==$ligne['usr_password'])
			{
				echo "<p>Vous êtes connecté $_POST[login].Bienvenu!<br/>";
				echo "Veuillez accéder à votre espace cher maitre : <br/><a href=\"admin.php\"> <3 </a>";
				$test=true;
			}
		}	
		if($test==false)
		{
			echo "Combinaison incorrect !";
			echo "Veuillez réessayer <a href=\"login.php\">ici</a>"	;
			
		}	

?>