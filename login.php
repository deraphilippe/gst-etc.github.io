<?php
function getAllUser(){
	$database=new PDO("mysql: host=localhost; dbname=etatCivil","root","");
	$result=$database->query("SELECT nomUser FROM user");
	while ($data=$result->fetch()) {
		echo "<option>".$data['nomUser']."</option>";
	}
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="font/font.css">
	<script type="text/javascript">
	function visibility(val){
		document.getElementById("user").style.visibility=val;
	}
	function response(resp){
		if (resp=="error") {
			visibility("visible");
		}
		else{
			visibility("hidden");
		}
	}
	</script>
<style type="text/css">
h2
{
	position: relative;
	right: 40px;
}
body
{
	font-family: "Calibri";
}
input
{
	font-size: 19px;
}
#log
{
	position: absolute;
	border: 1px red solid;
	background-color: red;
	font-weight: bold;
	width: 499px;
	font-size: 20px;
	right: 100Px;
	top: 275px;
}
#img9
{
	position: absolute;
	left: 120px;
	top: 10px;
	border: 3px white solid;
	border-radius: 100pX;
	width: 350px;
}
#notice
{
	width: 500px;
	color: white;
	text-align: center;
	position: absolute;
	top: 180px;
	left: 60px;
}
#log2
{
	position: absolute;
	border: 1px red solid;
	background-color: red;
	text-align: center;
	width: 499px;
	font-size: 20px;
	right: 500Px;
	top: 270px;
	font-weight: bold;
	cursor: pointer;
	border-bottom-right-radius: 40px;
	border-bottom-left-radius: 40px;
}
#creer
{
	cursor: pointer;
	border: 1px yellow solid;
	font-size: 19px;
	padding: 5px;
	color: black;
	background-color: yellow;
}
#creer:hover
{
	border: 1px black solid;
	background-color: black;
	color: white;
}
#imglogin
{
	width: 32px;
	height: 32px;
	float: left;
}
.error
{
	color: red;
}
#img1
{
	position: absolute;
	left: 47%;
	width: 1260px;
	transform: translate(-50%);

}
#login
{
	position: absolute;
	background-color: orange;
	border-radius: 0px;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 99%;
	z-index: 1;	
}
fo
#user
{
	padding: 10px;
	border: 1px white solid;
	background-color: orange;
	transform: translate(70%,0%);
	width: 520px;
	height: 500px;
}
#input
{
	height: 25px;
	border: 1px white solid;
	border-radius: 5px;
	margin-left: 5px;
}
#armoire
{
	position: relative;
	top: 5px;
	left: 100px;
	width: 200px;
	height: 190px;
	float: left;
}
#form
{
	position: absolute;
	left: 60%;
}
p
{
	font-size: 19px;
}
select
{
	width: 200px;
}
h2
{
	font-family: "Commercial Script BT";
	color: white;
	font-size: 29px;
}
</style>
</head>
<body>
	<div id="titre"><img id="img1"  src="image/fidinana5.jpg"></div>
	<div id="login">
	<form action="connexion.php" method="post" id="form0">
		<img src="image/hoteldeville.jpg" id="img9">
		<p id="notice">Si vous voulez changer votre mot de passe, cliquer le bouton ci-dessous. Si vous l'avez oublier, veuillez contacter l'administrateur de la base de données</p>
		<div id="form">
		<h2>	Base de données de l'etat civil </h2>
		<p><img id="imglogin" src="login.png">
			<select name="user">
				<?php getAllUser() ?>
			</select></p>
		<p><img id="imglogin" src="cle.png"><input type="password"  placeholder="Mot de passe" id="input" name="pwd"></p>
		<p class="error"><?php if (isset($_GET["error"])) {
			echo "Mot de passe incorrect, réessayer.";
		} ?></p>
	    <span id="log2" onclick="visibility('visible')">Gérer utilisateur</span>
	    </div>
	<p><input type="submit" value="Connecter" id="log"></p>
	<input type="hidden" name="error" value="<?php if (isset($_GET["error"])) echo $_GET["error"]  ?>">
	</form>
	</div>
	<div id="user">
		<form action="modif_mdp.php" method="post" id="form0">
		<p class="error"><?php if ( isset($_GET["response"]) && $_GET["response"]=="error") {
			echo "Mot de passe incorrect.";
		}; ?></p>
		<h3>CHANGEMENT DE MOT DE PASSE</h3>
		<p>Utilisateur:
			<select name="nomUser">
				<?php getAllUser() ?>
			</select></p>
		<p>Nouveau mot de passe  <input type="password" name="newPwd"></p>
		<p>Ancien mot de passe  <input type="password" name="oldPwd"></p>
		<input type="submit" id="creer" value="Valider">		
		<span id="creer" onclick="visibility('hidden')">Retour</span>
	</div>
</body>
<script type="text/javascript">
	document.getElementById("user").style.visibility="hidden";
	response("<?php if(isset($_GET['response'])){ echo $_GET['response']; } ?>");
</script>
</html>