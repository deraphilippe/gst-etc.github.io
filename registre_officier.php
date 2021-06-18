<?php session_start(); 
function action(){
	if (isset($_GET["numOff"])) {
		echo "modif_officier.php";
	}
	else{
		echo "ajout_officier.php";
	}
} 
function validation(){
	if (isset($_GET["numOff"])) {
		echo "Modifier";
	}
	else{
		echo "Enregistrer";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script language="Javascript">	
	</script>
</head>
<body>
	<header>
		<?php 
		require("authentification.php"); 
		include("header.php");
		include("classe/Model.php"); 
		include("classe/FormatDatetime.php"); 
		include("classe/fonction_util.php");
		?> 
	</header>
	<section>
    <div id="formulaire_ex">
	<fieldset>
		<legend >Enregistrement</legend>
		<form action="ajout_registre.php" method="post">
		<h3>REGISTRE</h3>
		<p>Nom du registre 
			<select name="nomReg">
				<option>Naissance</option>
				<option>Mariage</option>
				<option>Jugement</option>
				<option>Deces</option>
				<option>Adoption</option>
			</select>
		</p>
		<p><input type="text" placeholder="Date du registre" name="dateReg" required></p>
		<p><input id="bouton" type="submit" value="Enregistrer"> <input id="bouton" type="reset"></p>
		</form>
		<h3>OFFICIER</h3>
		<form action="<?php action() ?>" method="post">
		<p><input type="text" placeholder="Nom de l'officier" id="nomOff" name="nomOff" required></p>
		<p><input type="text" placeholder="Prénom de l'officier" id="prenomOff" name="prenomOff"></p>
		<p><input type="text" placeholder="Fonction" id="fonction" name="fonction"></p>
		<input type='hidden' id="numOff" name='numOff'>
		<p><input id="bouton" type="submit" value="<?php validation() ?>"> <input id="bouton" type="reset"></p>
		</form>
		<?php
		$result=$database->query("SELECT devise FROM devise");
		?>
		<h3>DEVISE NATIONALE</h3>
		<form action="modif_devise.php" method="post">
		<textarea style="font-size: 18px" name="devise"><?php echo $result->fetch()["devise"]; ?></textarea>
		<p><input id="bouton" type="submit" value="Modifier"></p>
		</form>
	</fieldset>
	</div>
		<div id="exception1">
			<?php 
			$model=new Model($_SESSION["modif"]);
			$query="SELECT * FROM registre";
			$attr=array("codeReg","nomReg","dateReg");
			$titre=array("Code","Nom du registre","Date du registre","Action");
			$model->setModelSimple($query,$attr,$titre); 
			?>
		</div>
		<div id="exception2">
			<?php 
			$model=new Model($_SESSION["modif"]);
			$query="SELECT * FROM officier";
			$attr=array("numOff","nomOff","prenomOff","fonction");
			$titre=array("Numéro","Nom de l'officier","Prénom de l'officier","Fonction","Suppression","Modification");
			$model->setModelOfficier($query,$attr,$titre); 
			?>
		</div>
	</section>
	<script>	
	document.getElementById("autre").style.backgroundColor="yellow";
	document.getElementById("autre").style.border="1px yellow solid";
	let doc=document.querySelectorAll("#boutSup");
	for (i of doc){
		i.addEventListener('click', function(e){
			if (!confirm("Voulez-vous vraiment supprimer cet enregistrement?")) {
				e.preventDefault();
			}
	});

	}
	</script>
	<script src="Javascript.js"></script>
</body>
</html>
<?php if (isset($_GET['numOff'])){
	$array=array("numOff","nomOff","prenomOff","fonction");
	$result=$database->query("SELECT * FROM officier WHERE numOff=".$_GET['numOff']);
	$data=$result->fetch();
	foreach ($array as $key) {?>
		<script>document.getElementById("<?php echo $key ?>").value="<?php echo $data[$key] ?>"</script>;
	<?php
	}
}
?>

	