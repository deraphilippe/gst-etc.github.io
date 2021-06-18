<?php 
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
function set_lien(){
	$str="Enregistrer" ;
	if (isset($_GET['numAdopt'])) {
		$str="Valider modification";
	}
	return $str;
} 
function action(){
    if (isset($_GET['numAdopt'])){
		echo 'modif_adoption.php?numAdopt='.$_GET['numAdopt'].'&numPers='.$_GET['numPers'].'&nbr='.$_GET['nbr'];
    }
    else{
		echo 'ajout_adoption.php?nbr='.$_GET['nbr'];
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body  onload="
	    array_pers=['nomPers','prenomPers','profPers','adrPers','dateNaissPers','lieuNaissPers' ];
	    array_enfant=['nomEnfant','prenomEnfant','dateNaissEnfant','lieuNaissEnfant','sexeEnfant',
		                'nomMere','prenomMere','nomPere','prenomPere'];
		array_tem=['nomTem','prenomTem','profTem','adrTem','dateNaissTem','lieuNaissTem'];
	    array_adoption=['numActeAdopt','nomPerePers','prenomPerePers','vivPere','nomMerePers','prenomMerePers','vivMere','codeReg','numOff','dateAdopt','heureAdopt','lieuAdopt','dateEcrit'];
        complete_champ(array_pers);
        complete_champ(array_adoption);
        set_valueOf('dateNaissPers','Pers');
        set_officier(form1.elements['numOff'].value);
        for (var u = 1; u <3; u++) {
        	array=[];
        	for (var v = 0; v < array_tem.length; v++) {
        		array[v]=array_tem[v]+u;
        	}
        	complete_champ(array);
        	set_valueOf('dateNaissTem'+u,'Tem'+u);
        }
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
		<?php include("header.php");    ?></header>

	<section>
	    <div id="side">
			<img id="photo" src="image/img.jpg">
		</div>
		<div id="formulaire">
		<form id="form0" enctype="multipart/form-data" action="<?php echo action() ?>" method="post">
			<div id="formulaire0">
			<fieldset> <p><input type="submit"  id="bouton" class="submit" value="<?php echo set_lien() ?>"> <input type="reset" id="bouton" name=""> Parents: <input type="radio" id="meme" checked value="meme" name="parent">même <input type="radio" value="different" id="different" name="parent">different <input type="file" name="image" value="Importer une image" size="10"></p>
			<div id="barreOff">
		    	<p>Officier <select name="numOff"><?php getOfficier($database); ?> </select> 
		        Registre <select name="codeReg"><?php getRegistre($database, "SELECT codeReg FROM registre WHERE nomReg='adoption' "); ?> </select> </p>
			</fieldset>	
		    </div>
			<div id="formulaire1">
			<fieldset>
				<legend>A propos de l'adoptant(e)</legend>
				<p><input type="text" placeholder="N°acte" name="numActeAdopt"></p>
				<p><input type="text" placeholder="Nom de l'adoptant(e)" name="nomPers"></p>
				<p><input type="text" placeholder="Prénom de l'adoptant(e)" name="prenomPers"></p>
				Lieu d'adoption
				<p> <input type="radio" id="commune" checked value="commune" name="lieuAdopt">A la commune</p>
				<p> <input type="radio" value="tribunal" id="tribunal" name="lieuAdopt">Au tribunal </p>
				<p id="dateEcrit">Date jugement: <input type="date" name="dateEcrit"></p>
				<div id="adoptant">
				<p><input placeholder="Profession" type="text"  name="profPers"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissPers"></p>
				<input type="hidden" name="dateNaissPers"></p>
				<p>Date de naissance
				  <select name="dayPers"><?php getDay() ?></select>/
				  <select name="monthPers"><?php getMonth() ?></select>/
				  <input type="text" name="yearPers" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrPers"></p>
				<p><input placeholder="Nom du père de l'adoptant(e)" type="text"  name="nomPerePers"></p>
				<p><input placeholder="Prénom du père de l'adoptant(e)" type="text"  name="prenomPerePers"></p>
			    <p><input type="radio" value="oui" name="vivPere">Père encore en vie
			    	<input type="radio" value="non" checked name="vivPere">non
			    </p>
				<p><input placeholder="Nom de la mere de l'adoptant(e)" type="text"  name="nomMerePers"></p>
				<p><input placeholder="Prénom de la mere de l'adoptant(e)" type="text"  name="prenomMerePers"></p>
				<p><input type="radio" value="oui" name="vivMere">Mère encore en vie
			    	<input type="radio" value="non"checked name="vivMere">non
			    </p>
			    </div>
			</fieldset>
			<fieldset>
				<legend>Autre</legend>
			    <p>Date d'adoption<input type="date" name="dateAdopt"></p>
			    <p>Heure d'adoption<input type="time" name="heureAdopt"></p>
	        
			</fieldset>
			</div>
			<div id="formulaire_except">
			<?php
			$i=1;
			for ($i=1; $i <$_GET['nbr']+1 ; $i++) { ?>
				<fieldset>
				<legend>A propos de l'adopté(e) n°<?php echo $i ?></legend>
				<p><input type="text" placeholder="Nom de l'enfant" name="nomEnfant<?php echo $i ?>"></p>
				<p><input type="text" placeholder="Prénom de l'enfant" name="prenomEnfant<?php echo $i ?>"></p>

				<input type="hidden" name="dateNaissEnfant<?php echo $i ?>">
				<p>Date de naissance
				  <select name="dayEnfant<?php echo $i ?>"><?php getDay() ?></select>/
				  <select name="monthEnfant<?php echo $i ?>"><?php getMonth() ?></select>/
				  <input type="text" name="yearEnfant<?php echo $i ?>" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissEnfant<?php echo $i ?>">
				<p>Sexe <input type="radio" name="sexeEnfant<?php echo $i ?>" value="zazalahy"> Zazalahy 
						<input type="radio" checked name="sexeEnfant<?php echo $i ?>" value="zazavavy"> Zazavavy<br/>
						<input type="radio" name="sexeEnfant<?php echo $i ?>" value="lehilahy"> Lehilahy
						<input type="radio" name="sexeEnfant<?php echo $i ?>" value="vehivavy"> Vehivavy
						</p>
				<div id="mere<?php echo $i ?>">
				<fieldset>
				<legend>A propos des parents</legend>
				<p><input type="text" placeholder="Nom du père" name="nomPere<?php echo $i ?>"></p>
				<p><input type="text" placeholder="Prénom du père" name="prenomPere<?php echo $i ?>"></p>
				<input type="hidden" name="dateNaissPere<?php echo $i ?>">
				<p><input placeholder="Profession du père" type="text"  name="profPere<?php echo $i ?>"></p>
				<p><input placeholder="Lieu de naissance père" type="text"  name="lieuNaissPere<?php echo $i ?>"></p>
				<p>Date de naissance
				  <select name="dayPere<?php echo $i ?>"><?php getDay() ?></select>/
				  <select name="monthPere<?php echo $i ?>"><?php getMonth() ?></select>/
				  <input type="text" name="yearPere<?php echo $i ?>" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Profession" type="text"  name="profPere<?php echo $i ?>"></p>
		         <p><input type="radio" value="oui" checked name="vivantPere<?php echo $i ?>">Père encore en vie
			    	<input type="radio" value="non" name="vivantPere<?php echo $i ?>">non
			    </p>
				<p><input type="text" placeholder="Nom de la mère" name="nomMere<?php echo $i ?>"></p>
				<p><input type="text" placeholder="Prénom de la mère" name="prenomMere<?php echo $i ?>"></p>
				<p><input placeholder="Profession de la mère" type="text"  name="profMere<?php echo $i ?>"></p>
				<p><input placeholder="Lieu de naissance mère" type="text"  name="lieuNaissMere<?php echo $i ?>"></p>
				<p>Date de naissance
				  <select name="dayMere<?php echo $i ?>"><?php getDay() ?></select>/
				  <select name="monthMere<?php echo $i ?>"><?php getMonth() ?></select>/
				  <input type="text" name="yearMere<?php echo $i ?>" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Profession" type="text"  name="profMere<?php echo $i ?>"></p>
				<p><input type="radio" value="oui" checked name="vivantMere<?php echo $i ?>">Mère encore en vie
			    	<input type="radio" value="non" name="vivantMere<?php echo $i ?>">non
			    </p>
				</fieldset>
				</div>
			</fieldset>
			<?php
			} 
			?>
			</div>
			<div id="formulaire5">
			<fieldset>
				<legend>A propos du temoin n°1</legend>
				<p><input type="text" placeholder="Nom du temoin" name="nomTem1"></p>
				<p><input type="text" placeholder="Prenom du temoin" name="prenomTem1"></p>
				<p><input placeholder="Profession" type="text"  name="profTem1"></p>
				<p><input placeholder="lieu de naissance" type="text"  name="lieuNaissTem1"></p>
				<input type="hidden" name="dateNaissTem1">
				<p>Date de naissance
				  <select name="dayTem1"><?php getDay() ?></select>/
				  <select name="monthTem1"><?php getMonth() ?></select>/
				  <input type="text" name="yearTem1" placeholder="2000" size="1">
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrTem1"></p>
			</fieldset>
			<fieldset>
				<legend>A propos du temoin n°2</legend>
				<p><input type="text" placeholder="Nom du temoin" name="nomTem2"></p>
				<p><input type="text" placeholder="Prenom du temoin" name="prenomTem2"></p>
				<p><input placeholder="Profession" type="text"  name="profTem2"></p>
				<p><input placeholder="lieu de naissance" type="text"  name="lieuNaissTem2"></p>
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
	$array_pers=array("nomPers","prenomPers","profPers","adrPers","dateNaissPers","lieuNaissPers" );
	$array_tem=array("nomTem","prenomTem","profTem","adrTem","dateNaissTem","lieuNaissTem" );
	$array_enfant=array("nomEnfant","prenomEnfant","dateNaissEnfant","lieuNaissEnfant","sexeEnfant",
		                "nomMere","prenomMere","nomPere","prenomPere");
	$array_adoption=array('numActeAdopt','nomPerePers','prenomPerePers','vivPere','nomMerePers','prenomMerePers','vivMere','codeReg','numOff','dateAdopt','heureAdopt','lieuAdopt','dateEcrit');
	if (isset($_GET["numAdopt"])) {
		$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
		$result=$database->query("SELECT *,adressePers as adrPers FROM personne WHERE numPers='".$_GET["numPers"]."'");
		$data=$result->fetch();
		foreach ($array_pers as $elt) {
			echo "<input type='hidden' name='".$elt."' value='".$data[$elt]."'>";
		}
		$result=$database->query("SELECT * FROM adoption WHERE numAdopt='".$_GET["numAdopt"]."'");
		$data=$result->fetch();
		foreach ($array_adoption as $elt) {?>
			<input type='hidden' name="<?php echo $elt ?>" value="<?php echo $data[$elt] ?>">
		<?php
		}
		for ($j=1; $j <3 ; $j++) {
			$result1=$database->query("SELECT nomPers as nomTem, prenomPers as prenomTem, profPers as profTem, adressePers as adrTem, dateNaissPers as dateNaissTem, lieuNaissPers as lieuNaissTem FROM personne WHERE numPers='".$data["numTem".$j]."'");
			$data1=$result1->fetch();
			foreach ($array_tem as $sub_elt) {?>
				<input type='hidden' name="<?php echo $sub_elt.$j; ?>" value="<?php echo $data1[$sub_elt]; ?>">
			<?php
			}		 
		}
		$i=1;
		$result=$database->query("SELECT * FROM adopter WHERE numAdopt='".$_GET["numAdopt"]."'");
		while ($data=$result->fetch()) {
			foreach ($array_enfant as $elt) {?> 
			    <input type="hidden" name="<?php echo $elt.$i; ?>" value="<?php echo $data[$elt]; ?>">
		    <?php
		    }
		    $i+=1;
		}
	}  
	?>
	</form> 
	<script>		
	document.getElementById("adoption").style.backgroundColor="yellow";
	document.getElementById("adoption").style.border="1px yellow solid";
	document.getElementById("meme").checked=true;
	document.getElementById("dateEcrit").style.visibility="hidden";
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
	mere_enfants("hidden");
	document.getElementById("meme").addEventListener('click',function(){
		mere_enfants("hidden","meme");
	});
	document.getElementById("different").addEventListener('click',function(){
		mere_enfants("visible");
	});
	document.getElementById("commune").addEventListener('click',function(){
		document.getElementById("dateEcrit").style.visibility="hidden";
		document.getElementById("formulaire5").style.visibility="visible";
		document.getElementById("adoptant").style.visibility="visible";

	});
	document.getElementById("tribunal").addEventListener('click',function(){
		document.getElementById("dateEcrit").style.visibility="visible";
		document.getElementById("formulaire5").style.visibility="hidden";
		document.getElementById("adoptant").style.visibility="hidden";
	});
	function set_date(){
		form0.dateNaissPers.value=form0.yearPers.value+"-"+form0.monthPers.value+"-"+form0.dayPers.value;
		form0.dateNaissTem1.value=form0.yearTem1.value+"-"+form0.monthTem1.value+"-"+form0.dayTem1.value;
		form0.dateNaissTem2.value=form0.yearTem2.value+"-"+form0.monthTem2.value+"-"+form0.dayTem2.value;
	}
	document.querySelector(".submit").addEventListener('click',function(e){
		set_date();
		setDateNaissEnfant(parseInt(form0.nbr.value));
	});
	</script>
</body>
</html>