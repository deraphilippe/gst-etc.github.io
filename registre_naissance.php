<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
<?php 
function isRegistre(){
	$registre="";
	if (isset($_GET['registre'])){
		$registre=$_GET['registre'];
	}
	return $registre;
} 
?>
</head>
<body onload="registre_selectionne('<?php echo isRegistre() ?>')">
	<header>
		<?php 
		include("header.php");
		include("classe/Model.php"); 
		include("classe/FormatDatetime.php"); 
		include("classe/fonction_util.php");
		require("authentification.php"); 
		$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
		?> 
	</header>
	<section>
    <div id="formulaire0">
	<fieldset>
		<p>
		<form id="form0" action="registre_naissance.php" method="post">
		<input id="bouton" type="button" value="Nouvel enregistrement" onclick="document.location='form_naissance.php?type=declaration'">
		<label >Registre <select onchange="recharger_page('registre_naissance.php')" value="<?php isRegistre() ?>" name="registre"> <option></option><?php getRegistre($database,"SELECT codeReg FROM registre WHERE nomReg='Naissance' OR nomReg='Jugement'"); ?> </select> </label>
		<input type="search" name="elt" placeholder="Recherche" size="50" name=""><button style="border:none" type="submit"><img id="rec" src="image/rec.png"></button>
		</form>
		</p>
	</fieldset>
	</div>
		<div id="registre">
			<?php 
			$model=new Model($_SESSION["modif"]);
			$datetime=new FormatDateTime();
			$datetime->completeTimeTab();
			if (isset($_POST["elt"])) {
				$query="SELECT * FROM acteNaissance WHERE codeReg='".$_POST["registre"]."' AND nomCompletEnfant LIKE '%".$_POST["elt"]."%'";
			}
			else{
				$query="SELECT * FROM acteNaissance WHERE codeReg='".isRegistre()."'  ORDER BY numActeNaiss ASC";
			}
			$model->setModelNaissance($query); 
			?>
		</div>
	</section>
	<footer> </footer>
	<script src="javascript.js"></script>
	<script src="resolution.js"></script>
	<script>
	document.getElementById("naissance").style.backgroundColor="yellow";
	document.getElementById("naissance").style.border="1px yellow solid";
	</script>

</body>
</html>