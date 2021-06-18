<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script language="Javascript">	
		function ajoutReconnaissance(){
			var nbr=prompt("Saisissez le nombre d'enfants à reconnaitre");
			if (nbr>0) {
				document.location='form_reconnaissance.php?nbr='+nbr;
			}
    }

	</script>
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
		<form id="form0" action="registre_reconnaissance.php" method="post">
		<input id="bouton" type="button" value="Nouvel enregistrement" onclick="insertion_multiple()">
		<label >Registre <select onchange="recharger_page('registre_reconnaissance.php')" value="<?php isRegistre(); ?>" name="registre"> <option><?php getRegistre($database,"SELECT codeReg FROM registre WHERE nomReg='Naissance' "); ?></option> </select> </label>
		<input type="search" placeholder="Recherche" size="50" name="elt"><button style="border:none" type="submit"><img id="rec" src="image/rec.png"></button>
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
				$query="SELECT * FROM acteReconnaissance WHERE codeReg='".$_POST["registre"]."' AND (nomCompletEnfant LIKE '%".$_POST["elt"]."%' OR nomPere LIKE '%".$_POST["elt"]."%')";			
			}
			else{
				$query="SELECT * FROM acteReconnaissance WHERE codeReg='".isRegistre()."'  ORDER BY numActeRec ASC";
			}
			$model->setModelReconnaissance($query); 
			?>
		</div>
	</section>
	<?php 
	if (isset($_GET["numNaiss"])) {?>
		<div id="backinfo"></div>
	    <div id="info-sup">
	    	<div id="tete-info">X</div>
	    	<div id="info">
	    		<?php if ($_GET['type']=="image") {
	    			$result=$database->query("SELECT * FROM naissance WHERE numNaiss='".$_GET["numNaiss"]."'");
	                $data=$result->fetch(); 
	    			?>
	    		    <img style="width: 99% ;height: 90%; border-radius:5px; position: center;" src="<?php echo "data:".$data['typeImgNaiss'].";base64,".base64_encode(stripslashes($data['imgActeNaiss'])); ?>">	
	    		<?php }
	    		else { ?>
	    		 	<form style="position: relative; left: 300px;">
	    		 		<p>Mention: </p>
	    		 		<textarea rows="20" cols="50" name="mention"></textarea>
	    		 		<p><input id="bouton" type="submit" value="Ajouter"></p>
	    		 	</form>
	    		<?php } 
	    		?>
		   </div>
	    </div>
	<?php
	 } 
	?>
	<script src="resolution.js"></script>
	<script>		
	document.getElementById("reconnaissance").style.backgroundColor="yellow";
	document.getElementById("reconnaissance").style.border="1px yellow solid";
	</script>
	<script src="naissance.js"></script>
	<script src="javascript.js"></script>
</body>
</html>