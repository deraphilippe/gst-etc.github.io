<?php require("cssStyle.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion d'etat civil</title>
</head>
<body>
	<header>
	<img src="titre.png">
	<div id="header">
		<ul>
			<a href="registre_naissance.php" ><li id="naissance">Naissance</li></a>
			<a href="registre_reconnaissance.php"><li id="reconnaissance">Reconaissance</li></a>
			<a href="registre_adoption.php"><li id="adoption">Adoption</li></a>
			<a href="registre_deces.php"><li id="deces">Décès</li></a>	
			<a href="registre_mariage.php"><li id="mariage">Mariage</li></a>
			<a href="registre_officier.php"><li id="autre">Autre</li></a>
			<a href="deconnexion.php"><li>Deconnexion</li></a>
		</ul>	
	</div>
	<img id="barre" src="img4.jpg">
	<div id="content-err-arr"></div>
	<div id="content-err">
		<div id="content-inf">
		<p align="center">Information Incomplète</p>
		<p align="center"><button id="bout">OK</button></p>
		</div>
		<p><img id="img-err" src="image/Incomplete.gif"></p>
	</div>
	</header>
</body>
</html>