<?php 
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
function set_lien(){
	$str="Enregistrer" ;
	if (isset($_GET['numMariage'])) {
		$str="Valider modification";
	}
	return $str;
} 
function action(){
    if (isset($_GET['numMariage'])){
		echo 'modif_mariage.php?numMariage='.$_GET['numMariage'];
    }
    else{
		echo 'ajout_mariage.php';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="javascript.js"></script>
</head>

<style type="text/css">
</style>
<body onload="
	attr=['numActeMariage','dateMariage','codeReg','heureMariage','numOff','nomHomme','prenomHomme','dateNaissHomme','lieuNaissHomme','adrHomme','profHomme','nationalHomme','nomPereHomme','prenomPereHomme','dateNaissPereHomme','lieuNaissPereHomme','adrPereHomme','profPereHomme','vivPereHomme','nomMereHomme','prenomMereHomme','dateNaissMereHomme','lieuNaissMereHomme','adrMereHomme','profMereHomme','vivMereHomme','nomFemme','prenomFemme','dateNaissFemme','lieuNaissFemme','adrFemme','profFemme','nationalFemme','nomPereFemme','prenomPereFemme','dateNaissPereFemme','lieuNaissPereFemme','adrPereFemme','profPereFemme','vivPereFemme','nomMereFemme','prenomMereFemme','dateNaissMereFemme','lieuNaissMereFemme','adrMereFemme','profMereFemme','vivMereFemme','nomTem1','prenomTem1','dateNaissTem1','lieuNaissTem1','adrTem1','profTem1','nomTem2','prenomTem2','dateNaissTem2','lieuNaissTem2','adrTem2','profTem2'];
	autoFemme=['codeAutoFemme','dateAutoFemme','donAutoFemme'];
	autoHomme=['codeAutoHomme','dateAutoHomme','donAutoHomme'];
	jugHomme=['numJugHomme','dateJugHomme'];
	jugFemme=['numJugFemme','dateJugFemme'];
	sitHomme=['sitHomme'];
	sitFemme=['sitFemme'];
	complete_champ(attr);
	set_officier(form1.numOff.value);
	set_valueOf('dateNaissHomme','Homme');
	set_valueOf('dateNaissPereHomme','PereHomme');
	set_valueOf('dateNaissMereHomme','MereHomme');
    set_valueOf('dateNaissFemme','Femme');
    set_valueOf('dateNaissPereFemme','PereFemme');
	set_valueOf('dateNaissMereFemme','MereFemme');
	set_valueOf('dateNaissTem1','Tem1');
	set_valueOf('dateNaissTem2','Tem2');
	try{
		complete_champ(autoFemme);
	}catch(e){}
	try{
		complete_champ(autoHomme);
	}catch(e){}
	try{
		complete_champ(jugHomme);
	}catch(e){}
	try{
		complete_champ(jugFemme);
	}catch(e){}
	try{
		complete_champ(sitFemme);
	}catch(e){}
	try{
		complete_champ(sitHomme);
	}catch(e){}
">
	<header>
		<?php include("header.php")   ?></header>

	<section>
		<div id="side">
			<img id="photo" src="image/mariage-1.jpg">
		</div>
		<div id="formulaire">
		<form id="form0" enctype="multipart/form-data" action="<?php action() ?>" method="post">
			<div id="formulaire0">
			<fieldset> 
				<p><input type="file" name="image" value="Importer une image" size="10"><input type="submit"  id="bouton" class="submit" value="<?php echo set_lien() ?>"> <input type="reset" id="bouton"> </p>
			<div id="barreOff">
		    	<p>Officier <select name="numOff"><?php getOfficier($database); ?> </select> 
		        Registre <select name="codeReg"><?php getRegistre($database, "SELECT codeReg FROM registre WHERE nomReg='mariage' "); ?> </select> </p>
		    </div>
			</fieldset>	
		    </div>
			<div id="formulaire1">
				<fieldset>
				<legend>A propos de la mariage</legend>
				<p><input type="text" placeholder="N°acte" name="numActeMariage" required></p>
			    <p>Date du mariage<input type="date" name="dateMariage"></p>
			    <p>Heure du mariage<input type="time" name="heureMariage"></p>
				</fieldset>
			    <fieldset>
				<legend>A propos de l'homme</legend>
				<p><input type="text" placeholder="Nom de l'homme" name="nomHomme" required></p>
				<p><input type="text" placeholder="Prenom de l'homme" name="prenomHomme"></p>
				<p><input placeholder="Profession" type="text"  name="profHomme"></p>
				<p><input placeholder="Nationnalité" type="text"  name="nationalHomme"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissHomme"></p>
				<input type="hidden" name="dateNaissHomme"></p>
				<p>Date de naissance
				  <select name="dayHomme"><?php getDay() ?></select>/
				  <select name="monthHomme"><?php getMonth() ?></select>/
				  <input type="text" name="yearHomme" placeholder="2000" size="1">
				</p>
				<p>Si l'acte de naissance est un jugement
					<input placeholder="N°acte de jugement" type="text"  name="numJugHomme"><br/><br/>
					Date du jugement <input type="date"  name="dateJugHomme">
				</p><br/>

				<p><input placeholder="Adresse" type="text"  name="adrHomme">
			    </p>
			    <h3>PERE</h3>
				<p><input placeholder="Nom du père de l'homme" type="text"  name="nomPereHomme"></p>
				<p><input placeholder="Prenom du père de l'homme" type="text"  name="prenomPereHomme"></p>
				<p><input type="radio" value="oui" checked name="vivPereHomme">Père encore en vie
			    	<input type="radio" value="non" name="vivPereHomme">non
			    </p>
			    <p><input placeholder="Profession" type="text"  name="profPereHomme"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissPereHomme"></p>
				<input type="hidden" name="dateNaissPereHomme"></p>
				<p>Date de naissance
				  <select name="dayPereHomme"><?php getDay() ?></select>/
				  <select name="monthPereHomme"><?php getMonth() ?></select>/
				  <input type="text" name="yearPereHomme" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrPereHomme"></p>
				<h3>MERE</h3>
				<p><input placeholder="Nom du mère de l'homme" type="text"  name="nomMereHomme" required></p>
				<p><input placeholder="Prenom du mère d'homme" type="text"  name="prenomMereHomme"></p>
				<p><input type="radio" value="oui" checked name="vivMereHomme">Mère encore en vie
			    	<input type="radio" value="non" name="vivMereHomme">non
			    </p>
			    <p><input placeholder="Profession" type="text"  name="profMereHomme"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissMereHomme"></p>
				<input type="hidden" name="dateNaissMereHomme"></p>
				<p>Date de naissance
				  <select name="dayMereHomme"><?php getDay() ?></select>/
				  <select name="monthMereHomme"><?php getMonth() ?></select>/
				  <input type="text" name="yearMereHomme" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrMereHomme"></p>
				<h3>AUTORISATION</h3>
				<p><input placeholder="Numero" type="text"  name="codeAutoHomme"></p>
				<p>Date de sortie<input type="date"  name="dateAutoHomme"></p>
				Donneur:<br/><textarea name="donAutoHomme" style="font-family: 'Calibri';font-size: 20px; width: 300px;" ></textarea>
				<p>Situation matrimoniale:
				<textarea name="sitHomme" style="font-family: 'Calibri';font-size: 20px; width: 300px; height:200px" ></textarea></p>
			</fieldset>
			</div>
			<div id="formulaire3">
				<fieldset>
				<legend>A propos de la femme</legend>
				<p><input type="text" placeholder="Nom de la femme" name="nomFemme" required></p>
				<p><input type="text" placeholder="Prenom de la femme" name="prenomFemme"></p>
				<p><input placeholder="Profession" type="text"  name="profFemme"></p>
				<p><input placeholder="Nationnalité" type="text"  name="nationalFemme"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissFemme"></p>
				<input type="hidden" name="dateNaissFemme"></p>
				<p>Date de naissance
				  <select name="dayFemme"><?php getDay() ?></select>/
				  <select name="monthFemme"><?php getMonth() ?></select>/
				  <input type="text" name="yearFemme" placeholder="2000" size="1">
				</p>
				<p>Si l'acte de naissance est un jugement
					<input placeholder="N°acte de jugement" type="text"  name="numJugFemme"><br/><br/>
					Date du jugement <input type="date"  name="dateJugFemme">
				</p><br/>
				<p><input placeholder="Adresse" type="text"  name="adrFemme"></p>
			    <h3>PERE</h3>
				<p><input placeholder="Nom du père de la femme" type="text"  name="nomPereFemme"></p>
				<p><input placeholder="Prenom du père de la femme" type="text"  name="prenomPereFemme"></p>
				<p><input type="radio" value="oui" checked name="vivPereFemme">Père encore en vie
			    	<input type="radio" value="non" name="vivPereFemme">non
			    </p>
			    <p><input placeholder="Profession" type="text"  name="profPereFemme"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissPereFemme"></p>
				<input type="hidden" name="dateNaissPereFemme"></p>
				<p>Date de naissance
				  <select name="dayPereFemme"><?php getDay() ?></select>/
				  <select name="monthPereFemme"><?php getMonth() ?></select>/
				  <input type="text" name="yearPereFemme" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrPereFemme"></p>
				<h3>MERE</h3>
				<p><input placeholder="Nom du mère de la femme" type="text"  name="nomMereFemme"></p>
				<p><input placeholder="Prenom du mère da femme" type="text"  name="prenomMereFemme"></p>
				<p><input type="radio" value="oui" checked name="vivMereFemme">Mère encore en vie
			    	<input type="radio" value="non" name="vivMereFemme">non
			    </p>
			    <p><input placeholder="Profession" type="text"  name="profMereFemme"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissMereFemme"></p>
				<input type="hidden" name="dateNaissMereFemme"></p>
				<p>Date de naissance
				  <select name="dayMereFemme"><?php getDay() ?></select>/
				  <select name="monthMereFemme"><?php getMonth() ?></select>/
				  <input type="text" name="yearMereFemme" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrMereFemme"></p>
				<h3>AUTORISATION</h3>
				<p><input placeholder="Numero" type="text"  name="codeAutoFemme"></p>
				<p>Date de sortie<input placeholder="Numero" type="date"  name="dateAutoFemme"></p>
				Donneur<br/><textarea name="donAutoFemme" style="font-family: 'Calibri';font-size: 20px; width: 300px;" ></textarea>
				<p>Situation matrimoniale:
				<textarea name="sitFemme" style="font-family: 'Calibri';font-size: 20px; width: 300px; height:200px" ></textarea></p>				
				</fieldset>
				</div>
			</fieldset>
			<div id="formulaire5">
			<fieldset>
				<legend>A propos du 1e temoin</legend>
				<p><input type="text" placeholder="Nom du temoin" name="nomTem1" required></p>
				<p><input type="text" placeholder="Prenom du temoin" name="prenomTem1"></p>
				<p><input placeholder="Profession" type="text"  name="profTem1"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissTem1"></p>
				<input type="hidden" name="dateNaissTem1">
				<p>Date de naissance
				  <select name="dayTem1"><?php getDay() ?></select>/
				  <select name="monthTem1"><?php getMonth() ?></select>/
				  <input type="text" name="yearTem1" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrTem1"></p>
			</fieldset>
			<fieldset>
				<legend>A propos du 2e temoin</legend>
				<p><input type="text" placeholder="Nom du temoin" name="nomTem2" required></p>
				<p><input type="text" placeholder="Prenom du temoin" name="prenomTem2"></p>
				<p><input placeholder="Profession" type="text"  name="profTem2"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissTem2"></p>
				<input type="hidden" name="dateNaissTem2">
				<p>Date de naissance
				  <select name="dayTem2"><?php getDay() ?></select>/
				  <select name="monthTem2"><?php getMonth() ?></select>/
				  <input type="text" name="yearTem2" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrTem2"></p>
			</fieldset>
			</div>
			<p><input type="hidden" name="nbr" value="<?php echo $i ?>"></p>
	    </form>
	    </div>   
	</section>
    <form id="form1"> 
	<?php
	$attr=array('numActeMariage','dateMariage','codeReg','heureMariage','numOff','nomHomme','prenomHomme','dateNaissHomme','lieuNaissHomme','adrHomme','profHomme','nationalHomme','nomPereHomme','prenomPereHomme','dateNaissPereHomme','lieuNaissPereHomme','adrPereHomme','profPereHomme','vivPereHomme','nomMereHomme','prenomMereHomme','dateNaissMereHomme','lieuNaissMereHomme','adrMereHomme','profMereHomme','vivMereHomme','nomFemme','prenomFemme','dateNaissFemme','lieuNaissFemme','adrFemme','nationalFemme','profFemme','nomPereFemme','prenomPereFemme','dateNaissPereFemme','lieuNaissPereFemme','adrPereFemme','profPereFemme','vivPereFemme','nomMereFemme','prenomMereFemme','dateNaissMereFemme','lieuNaissMereFemme','adrMereFemme','profMereFemme','vivMereFemme','nomTem1','prenomTem1','dateNaissTem1','lieuNaissTem1','adrTem1','profTem1','nomTem2','prenomTem2','dateNaissTem2','lieuNaissTem2','adrTem2','profTem2');
	$autoFemme=array("codeAutoFemme","dateAutoFemme","donAutoFemme");
	$autoHomme=array("codeAutoHomme","dateAutoHomme","donAutoHomme");
	$jugHomme=array("numJugHomme","dateJugHomme");
	$jugFemme=array("numJugFemme","dateJugFemme");
	if (isset($_GET["numMariage"])) {
		$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
		$result=$database->query("SELECT * FROM acteMariage WHERE numMariage='".$_GET["numMariage"]."'");
		$data=$result->fetch();
		foreach ($attr as $elt) {?>
			<input type='hidden' name="<?php echo $elt; ?>" value="<?php echo $data[$elt]; ?>">
		<?php
	    }
		set_autorisation($database,$autoHomme,$data['numHomme']."-".$data['dateMariage']);
		set_autorisation($database,$autoFemme,$data['numFemme']."-".$data['dateMariage']);
		set_jugement_mariage($database,$data['numHomme'],$jugHomme);
		set_jugement_mariage($database,$data['numFemme'],$jugFemme);
		set_situation($database,$data['numHomme'],$data['dateMariage'],"sitHomme");
		set_situation($database,$data['numFemme'],$data['dateMariage'],"sitFemme");
	}  
	?> 
	</form> 
	<script>
	document.getElementById("mariage").style.backgroundColor="yellow";
	document.getElementById("mariage").style.border="1px yellow solid";
	function set_date(){
		form0.dateNaissHomme.value=form0.yearHomme.value+"-"+form0.monthHomme.value+"-"+form0.dayHomme.value;
		form0.dateNaissFemme.value=form0.yearFemme.value+"-"+form0.monthFemme.value+"-"+form0.dayFemme.value;
		form0.dateNaissPereHomme.value=form0.yearPereHomme.value+"-"+form0.monthPereHomme.value+"-"+form0.dayPereHomme.value;
		form0.dateNaissMereHomme.value=form0.yearMereHomme.value+"-"+form0.monthMereHomme.value+"-"+form0.dayMereHomme.value;
		form0.dateNaissPereFemme.value=form0.yearPereFemme.value+"-"+form0.monthPereFemme.value+"-"+form0.dayPereFemme.value;
		form0.dateNaissMereFemme.value=form0.yearMereFemme.value+"-"+form0.monthMereFemme.value+"-"+form0.dayMereFemme.value;
		form0.dateNaissTem1.value=form0.yearTem1.value+"-"+form0.monthTem1.value+"-"+form0.dayTem1.value;
		form0.dateNaissTem2.value=form0.yearTem2.value+"-"+form0.monthTem2.value+"-"+form0.dayTem2.value;
	}
	document.querySelector(".submit").addEventListener('click',function(e){
		set_date();

	});
</script>
</body>
</html>