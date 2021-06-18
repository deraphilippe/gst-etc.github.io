<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script src="javascript.js"></script>
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
		require("authentification.php"); 
		include("header.php");
		include("classe/Model.php"); 
		include("classe/FormatDatetime.php"); 
		include("classe/fonction_util.php"); 
		$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
		?> 
	</header>
	<section>
    <div id="formulaire0">
	<fieldset>
		<p>
		<form id="form0" action="registre_adoption.php" method="post">
		<input id="bouton" type="button" value="Nouvel enregistrement" onclick="insertion_multiple('adoption')">
		<label >Registre <select onchange="recharger_page('registre_adoption.php')" value="<?php isRegistre() ?>" name="registre"> <option></option><?php getRegistre($database,"SELECT codeReg FROM registre WHERE nomReg='Adoption' "); ?> </select> </label>
		<input type="search" placeholder="Recherche" size="50" name="elt"><button style="border:none" type="submit"><img id="rec" src="image/rec.png"></button>
		</form>
		</p>
	</fieldset>
	</div>
		<div id="registre">
			<?php 
			$model=new Model($_SESSION['modif']);
			$datetime=new FormatDateTime();
			$datetime->completeTimeTab();
			if (isset($_POST["elt"])) {
				$query="SELECT * FROM acteAdoption WHERE codeReg='".$_POST["registre"]."' AND (nomCompletEnfant LIKE '%".$_POST["elt"]."%' OR nomAdoptant LIKE '%".$_POST["elt"]."%')";			
			}
			else{
				$query="SELECT * FROM acteAdoption WHERE codeReg='".isRegistre()."' ORDER BY numActeAdopt ASC";
			}
			$model->setModelAdoption($query); 
			?>
		</div>
	</section>
	<footer> </footer>
	<script src="resolution.js"></script>
	<script type="text/javascript">
	document.getElementById("adoption").style.backgroundColor="yellow";
	document.getElementById("adoption").style.border="1px yellow solid";

	</script>
	<script src="naissance.js">
	</script>
</body>
</html>