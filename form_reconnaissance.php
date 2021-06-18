<?php 
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
function action(){
	$str="ajout_reconnaissance.php?nbr=".$_GET['nbr'] ;
	if (isset($_GET['numRec'])) {
		$str="modif_reconnaissance.php?numRec=".$_GET['numRec']."&nbr=".$_GET['nbr']."&numPere=".$_GET['numPere'];
	}
	return $str;
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body onload="
	    array_pere=['nomPere','prenomPere','profPere','adrPere','dateNaissPere','lieuNaissPere','agePere' ];
	    array_enfant=['nomEnfant','prenomEnfant','dateNaissEnfant','lieuNaissEnfant','sexeEnfant',
		                'nomMere','prenomMere'];
	    array_parent=['nomMere','prenomMere','dateNaissMere','lieuNaissMere','profMere','adrMere',
		'nomPere','prenomPere','dateNaissPere','lieuNaissPere','profPere','adrPere'];
		array_reconnaissance=['numActeRec','codeReg','numOff','dateRec','heureRec'];
        complete_champ(array_pere);
        complete_champ(array_reconnaissance);
        set_valueOf('dateNaissPere','Pere');
        set_officier(form1.elements['numOff'].value);
        for (var i = 1; i < parseInt(form0.nbr.value); i++) {
        	array=[];
        	for (var j = 0; j < array_enfant.length; j++) {
        		array[j]=array_enfant[j]+i;
        	}
        	complete_champ(array);
        	set_valueOf('dateNaissEnfant'+i,'Enfant'+i);
        }
        ">
	<header>
		<?php include("header.php"); ?></header>

	<section>
	    <div id="side">
			<img id="photo" src="image/img.jpg">
		</div>
		<div id="formulaire">
		<form id="form0" enctype="multipart/form-data" action="<?php echo action() ?>" method="post">
			<div id="formulaire0">

			<fieldset> <p><input type="radio" id="meme" checked value="meme" name="mere">Même mère <input type="radio" value="different" id="different" name="mere">Mère different <input type="file" name="image" value="Importer une image" size="20"><input type="submit" class="submit"  id="bouton"
			 value="<?php if(isset($_GET['numRec'])){
					          echo 'Valider modification';
					      }
					      else{
					  	      echo 'Enregistrer'; 
					  }
			    ?>"> <input type="reset" id="bouton" value="Reinitialiser"></p>
			<div id="barreOff">
		    	<p>Officier <select name="numOff"><?php getOfficier($database); ?> </select> 
		        Registre <select name="codeReg"><?php getRegistre($database, "SELECT codeReg FROM registre WHERE nomReg='naissance' "); ?> </select> </p>
		    </div>
			</fieldset>	
		    </div>
			<div id="formulaire1">
			<fieldset>
				<legend>A propos du père</legend>
				<p><input type="text" placeholder="N°acte" name="numActeRec" required></p>
				<p><input type="text" placeholder="Nom du père" name="nomPere"></p>
				<p><input type="text" placeholder="Prénom du père" name="prenomPere"></p>
				<p><input placeholder="Profession" type="text"  name="profPere"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissPere"></p>
				<input type="hidden" name="dateNaissPere">
				<p>Date de naissance
				  <select name="dayPere"><?php getDay() ?></select>/
				  <select name="monthPere"><?php getMonth() ?></select>/
				  <input type="text" name="yearPere" placeholder="2000" size="1">
				</p>
				<p><input type="text" name="agePere" placeholder="Age du père" size="10"></p>
				<p><input placeholder="Adresse" type="text"  name="adrPere"></p>
			</fieldset>
			<fieldset>
				<legend>Autre</legend>
			    <p>Date reconnaissance<input type="date" name="dateRec"></p>
			    <p>Heure reconnaissance<input type="time" name="heureRec"> </p>
			</fieldset>
			</div>
			<div id="formulaire_except">
			<?php
			$i=1;
			 for ($i=1; $i <$_GET['nbr']+1 ; $i++) { ?>
				<fieldset>
				<legend>A propos de l'enfant n°<?php echo $i ?></legend>
				<p><input type="text" placeholder="Nom de l'enfant" name="nomEnfant<?php echo $i ?>"></p>
				<p><input type="text" placeholder="Prénom de l'enfant" name="prenomEnfant<?php echo $i ?>"></p>
				<input type="hidden" name="dateNaissEnfant<?php echo $i ?>"></p>
				<p>Date de naissance
				  <select name="dayEnfant<?php echo $i ?>"><?php getDay() ?></select>/
				  <select name="monthEnfant<?php echo $i ?>"><?php getMonth() ?></select>/
				  <input type="text" name="yearEnfant<?php echo $i ?>" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissEnfant<?php echo $i ?>">
				<p>Sexe <input type="radio" name="sexeEnfant<?php echo $i ?>" value="zazalahy"> Zazalahy 
						<input type="radio" checked name="sexeEnfant<?php echo $i ?>" value="zazavavy"> Zazavavy</p>
				<div id="mere<?php echo $i ?>">
				<fieldset>
				<legend>A propos de la mère</legend>
				<p><input type="text" placeholder="Nom de la mère" name="nomMere<?php echo $i ?>"></p>
				<p><input type="text" placeholder="Prénom de la mère" name="prenomMere<?php echo $i ?>"></p>
				</fieldset>
				</div>

			</fieldset>
			<?php
			} 
			?>
			<p><input type="hidden" name="nbr" value="<?php echo $i ?>"></p>
	    </form>
	    </div>
	<form id="form1"> 
	<?php
	$array_pere=array("nomPere","prenomPere","profPere","adrPere","dateNaissPere","lieuNaissPere","agePere" );
	$array_enfant=array("nomEnfant","prenomEnfant","dateNaissEnfant","lieuNaissEnfant","sexeEnfant",
		                "nomMere","prenomMere");
	$array_reconnaissance=array('numActeRec','codeReg','numOff','dateRec','heureRec');
	if (isset($_GET["numRec"])) {
		$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
		$result=$database->query("SELECT nomPers as nomPere, prenomPers as prenomPere, profPers as profPere, adressePers as adrPere, dateNaissPers as dateNaissPere, lieuNaissPers as lieuNaissPere, age as agePere FROM personne WHERE numPers=".$_GET["numPere"]);
		$data=$result->fetch();
		foreach ($array_pere as $elt) {?> 
			<input type='hidden' name="<?php echo $elt ?>" value="<?php echo $data[$elt] ?>">
		<?php
		}
		$result=$database->query("SELECT * FROM reconnaissance WHERE numRec='".$_GET["numRec"]."'");
		$data=$result->fetch();
		foreach ($array_reconnaissance as $elt) {?> 
			<input type='hidden' name="<?php echo $elt ?>" value="<?php echo $data[$elt] ?>">
		<?php
		}
		$i=1;
		$result=$database->query("SELECT * FROM reconnaitre WHERE numRec='".$_GET["numRec"]."'");
		while ($data=$result->fetch()) {
			foreach ($array_enfant as $elt) {?>
			    <input type='hidden' name="<?php echo $elt.$i ?>" value="<?php echo $data[$elt] ?>">
		    <?php
		    }
		    $i+=1;
		}
	}  
	?> 
	</form> 
	</section>
	<script>
	document.getElementById("reconnaissance").style.backgroundColor="yellow";
	document.getElementById("reconnaissance").style.border="1px yellow solid";
	function mere_enfants(valeur){
	    for (var i = 2; i < form0.nbr.value; i++) {
		    var id="mere"+i;
		    document.getElementById(id).style.visibility=valeur;
	    }
    }
    function setDateNaissEnfant(nbr){
		for (var i = 1; i <nbr+1 ; i++) {
			form0.elements["dateNaissEnfant"+i].value=form0.elements["yearEnfant"+i].value+"-"+form0.elements["monthEnfant"+i].value+"-"+form0.elements["dayEnfant"+i].value;
		}			
	}
	function set_date(){
		form0.dateNaissPere.value=form0.yearPere.value+"-"+form0.monthPere.value+"-"+form0.dayPere.value;
	}
    document.querySelector(".submit").addEventListener('click',function(e){
		set_date();
		setDateNaissEnfant(form0.nbr.value);
	});
	if (form0.elements['numActeRec'].value=="") {
		mere_enfants("hidden");
	}
	document.getElementById("meme").addEventListener('click',function(){
		mere_enfants("hidden");
	});
	document.getElementById("different").addEventListener('click',function(){
		mere_enfants("visible");
	});
	</script>
</body>
</html>