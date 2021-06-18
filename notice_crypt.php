<link rel="stylesheet" type="text/css" href="font/font.css">
<style type="text/css">
	#main-content
	{
		padding: 10px;
		font-size: 19;
		font-family: "Calibri";
		position: absolute;
		top: 100px;
		left: 100px;
		width: 80%;
	}
	header
	{
		position: absolute;
	}
	h2
	{
		font-family: "Commercial Script BT";
		font-size: 29px;
		color: red;
	}
	h3
	{
		font-family: "Commercial Script BT";
		color: blue;
	}
</style>
<section>
	<header>
	    <img src="image/gau.png" style="float: left;">
	    <img src="titre.png">
	    <img src="image/barre.png" style="float: right;">
	</header>

	<div id="main-content">
		<h2 align="center">Système de chiffrement utilisée par l'état civil</h2>
		<p>Pour retrouver ce qui cache derrière les numéros qui se trouvent en pied de la page. Il vous faut 2 choses dont: la clé et la dictionaire de chiffrement.</p>
		<h3>1-Cle de chiffrement</h3>
		La clé de chiffrement est le nom de la 1ère personne qui se trouve en bas du numéro de l'acte, c'est-à-dire le nom du marié pour le mariage, le nom de l'enfant pour la naissance, le nom du 1e adopté pour l'adoption multiple,...
		<p align="center"><img src="img/1.png"><img src="img/2.png"></p> 
		<h3>2-Dictionaire</h3>
		<p>C'est simple, on utilise juste l'alphabet français. On utilise leur rang dans l'ordre croissant.</p>

		<p>
			<?php 
			echo strtoupper("éèç");
			$alphabet="abcdefghijklmnopqrstuvwxyz "; 
			for ($i=0; $i <strlen($alphabet); $i++) {
				echo strtoupper($alphabet[$i])."=>".($i+1).", ";
			}
			?>
		</p>
	</div>	
</section>