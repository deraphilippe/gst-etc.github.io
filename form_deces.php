<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<?php
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
function action(){
	$page="ajout_deces.php";
	if (isset($_GET['numDec'])) {
		$page="modif_deces.php?numDeces=".$_GET['numDec'];
	}
	return $page;
}  
?>
<body onload="
        array=['typeDec','numActeDeces','nomDeces','prenomDeces','dateDeces','heureDeces','sexeDecedes',
        'lieuDeces','profDeces','lieuNaissDeces','adrDeces','dateNaissDeces','nomPere','prenomPere',
        'vivantPere','nomMere','prenomMere','vivantMere','profPere','adrPere','profMere','adrMere','codeReg','numOff'];
        array1=['nomDec','prenomDec','lieuNaissDec','dateNaissDec','profDec','adrDec','declarant','dateDecDeces','heureDecDeces'];
        array2=['numJugement','dateJugement','dateEnregistre','nomJuge','nomGreffier'];
        complete_champ(array);
        if (form0.declaration.checked==true) {
        	complete_champ(array1);
        	document.getElementById('formulaire4').style.visibility='visible';
		    document.getElementById('formulaire6').style.visibility='hidden';
        }
        else{
        	complete_champ(array2);
            document.getElementById('formulaire4').style.visibility='hidden';
		    document.getElementById('formulaire6').style.visibility='visible';
		    document.getElementById('dateDeclaration').style.visibility='hidden';
		    document.getElementById('heureDeclaration').style.visibility='hidden';
        }
        set_officier(form1.elements['numOff'].value);
        set_valueOf('dateNaissDeces','Deces');
        set_valueOf('dateNaissDec','Dec');
    ">
	<header>
		<?php include("header.php");?></header>
	<section>
	    <div id="side">
			<img id="photo" src="image/colomb.jpg">
		</div>
		<div id="formulaire">
		<form id="form0" enctype="multipart/form-data" id="form0" action="<?php echo action();  ?>" method="post">
			<div id="formulaire0">
			<p>Type: <input type="radio" id="declaration" checked value="declaration" name="typeDec">D??claration <input type="radio" value="jugement" id="jugement" name="typeDec">Jugement <span  style="padding-left: 20px; color: red"> Image de la registre:<input type="file" name="image" value="Importer une image" size="20"></span><input type="submit" class="submit" id="bouton" 
				value="<?php
				if (isset($_GET['numDec'])){
					echo 'Valider modification';
				}
				else{
					echo 'Enregistrer';
				} 
				?> "> <input type="reset" id="bouton" name=""></p>
		    <div id="barreOff">
		    	<p>Officier <select name="numOff"><?php getOfficier($database); ?> </select> 
		        Registre <select name="codeReg"><?php getRegistre($database, "SELECT codeReg FROM registre WHERE nomReg='Deces' "); ?> </select> </p></div>
		    </div>
			<div id="formulaire1">
			<fieldset>
				<legend>A propos de la personne d??c??d??(e)</legend>
				<p><input type="text" placeholder="N??acte" name="numActeDeces" required></p>
				<p><input type="text" placeholder="Nom du d??funt " name="nomDeces"></p>
				<p><input type="text" placeholder="Pr??nom du d??funt" name="prenomDeces"></p>
				<p>Date de d??c??s <input type="date" name="dateDeces"></p>
				<p>Heure de d??c??s<input type="time" name="heureDeces"></p>
				<p>Sexe <br/><input type="radio" name="sexeDecedes" value="zazalahy">Zazalahy 
						<input type="radio" checked name="sexeDecedes" value="zazavavy">Zazavavy<br/>
					    <input type="radio" checked name="sexeDecedes" value="lehilahy">Lehilahy
					    <input type="radio" checked name="sexeDecedes" value="vehivavy">Vehivavy
					    <input type="radio" checked name="sexeDecedes" value="inconnu">Inconnu</p>

				<p><input placeholder="Lieu du d??c??s" type="text"  name="lieuDeces"></p>
				<p><input placeholder="Profession" type="text"  name="profDeces"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissDeces"></p>
				<input type="hidden" name="dateNaissDeces">
				<p>Date de naissance 
				  <select name="dayDeces"><?php getDay() ?></select>/
				  <select name="monthDeces"><?php getMonth() ?></select>/
				  <input type="text" name="yearDeces" placeholder="2000" size="1"> </p>
				<p><input placeholder="Adresse" type="text"  name="adrDeces"></p>
			</fieldset>
			</div>
			<div id="formulaire3">
				<fieldset>
				<legend>A propos des parents</legend>
				<p><input placeholder="Nom du p??re du d??funt" type="text"  name="nomPere"></p>
				<p><input placeholder="Pr??nom du p??re du d??funt" type="text"  name="prenomPere"></p>
			    <p><input type="radio" value="oui" checked name="vivantPere">P??re encore en vie
			    	<input type="radio" value="non" name="vivantPere">non
			    </p>
			    <p><input placeholder="Adresse du p??re du d??funt" type="text"  name="adrPere"></p>
			    <p><input placeholder="Profession du p??re du d??funt" type="text"  name="profPere"></p><br/>
				<p><input placeholder="Nom de la m??re du d??funt" type="text"  name="nomMere"></p>
				<p><input placeholder="Pr??nom de la m??re du d??funt" type="text"  name="prenomMere"></p>
				<p><input type="radio" value="oui" checked name="vivantMere">M??re encore en vie
			    	<input type="radio" value="non" name="vivantMere">non
			    </p>
			     <p><input placeholder="Adresse du m??re du d??funt" type="text"  name="adrMere"></p>
			     <p><input placeholder="Profession du m??re du d??funt" type="text"  name="profMere"></p>
			    </fieldset>
			    <fieldset>
				<legend>Autre</legend>
			    <p id="dateDeclaration">Date d??claration <input type="date" name="dateDecDeces"></p>
			    <p id="heureDeclaration">Heure d??claration<input type="time" name="heureDecDeces"></p>
			    </fieldset>
			</div>
			<div id="formulaire4">
			<fieldset>
				<legend>A propos du d??clarant</legend>
				<p><input type="text" placeholder="Nom du d??clarant" name="nomDec"></p>
				<p><input type="text" placeholder="Pr??nom du d??clarant" name="prenomDec"></p>
				<p><input type="text" placeholder="Lien avec le d??clarant" name="declarant"></p>
				<p><input placeholder="Profession" type="text"  name="profDec"></p>
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissDec"></p>
				<input type="hidden" name="dateNaissDec">
				<p>Date de naissance 
				  <select name="dayDec"><?php getDay() ?></select>/
				  <select name="monthDec"><?php getMonth() ?></select>/
				  <input type="text" name="yearDec" placeholder="2000" size="1"></p>
				<p><input placeholder="Adresse" type="text"  name="adrDec"></p>
			</fieldset>
			</div>
			<div id="formulaire6">
			<fieldset>
				<legend>A propos du jugement</legend>
				<input type="hidden" name="lastnumjugement">
				<p><input type="text" placeholder="N??Jugement" name="numJugement"></p>
				<p>Date de jugement <input type="date" name="dateJugement"></p>
				<p>Date d'enregistrement <input type="date" name="dateEnregistre"></p>
				<p><input type="text" placeholder="Juge" name="nomJuge"></p>
				<p><input type="text" placeholder="Grefier" name="nomGreffier"></p>
			</fieldset>
			</div>
	    </form>
	    </div>   
	</section>
	<form id="form1">
	<?php
	$array_defunt=array("typeDec","numActeDeces","nomDeces","prenomDeces","dateDeces","heureDeces","sexeDecedes",
		"lieuDeces","profDeces","lieuNaissDeces","adrDeces",'dateNaissDeces','nomPere','prenomPere','vivantPere',
	    'nomMere','prenomMere','vivantMere','profPere','adrPere','profMere','adrMere','codeReg','numOff');
	$array_declarant=array('nomDec','prenomDec','lieuNaissDec','dateNaissDec','profDec','adrDec','declarant','dateDecDeces','heureDecDeces');
	$array_jugement=array('numJugement','dateJugement','dateEnregistre','nomJuge','nomGreffier');
	if (isset($_GET["numDec"])) {
		$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
		$result=$database->query("SELECT * FROM deces WHERE numDeces='".$_GET["numDec"]."'");
		$data=$result->fetch();
		foreach ($array_defunt as $elt) {?>
				<input type='hidden' name="<?php echo $elt; ?>" value="<?php echo $data[$elt]; ?>">
		<?php
		}
		if ($data["typeDec"]=="declaration") {
			$result=$database->query("SELECT * FROM declarantdeces WHERE numDeces='".$_GET["numDec"]."'");
			$data=$result->fetch();
			foreach ($array_declarant as $elt) {?>
				<input type='hidden' name="<?php echo $elt; ?>" value="<?php echo $data[$elt]; ?>">
			<?php
			}
		}
		else{
			$result=$database->query("SELECT * FROM jugementdeces WHERE numDeces='".$_GET["numDec"]."'");
							$data=$result->fetch();
			foreach ($array_jugement as $elt) {?>
				<input type='hidden' name="<?php echo $elt; ?>" value="<?php echo $data[$elt]; ?>">
			<?php
			}
		}
	}  
	?>
	</form>
	<script>
	document.getElementById("deces").style.backgroundColor="yellow";
	document.getElementById("deces").style.border="1px yellow solid";
	function set_date(){
		form0.dateNaissDec.value=form0.yearDec.value+"-"+form0.monthDec.value+"-"+form0.dayDec.value;
		form0.dateNaissDeces.value=form0.yearDeces.value+"-"+form0.monthDeces.value+"-"+form0.dayDeces.value;
	}
	document.querySelector(".submit").addEventListener('click',function(e){
		set_date();
	});
	document.getElementById("formulaire6").style.visibility="hidden";
	document.getElementById("declaration").addEventListener('click',function(){
		document.getElementById("formulaire4").style.visibility="visible";
		document.getElementById("formulaire6").style.visibility="hidden";
	    document.getElementById('dateDeclaration').style.visibility='visible';
		document.getElementById('heureDeclaration').style.visibility='visible';
	});
	document.getElementById("jugement").addEventListener('click',function(){
		document.getElementById("formulaire4").style.visibility="hidden";
		document.getElementById("formulaire6").style.visibility="visible";
	    document.getElementById('dateDeclaration').style.visibility='hidden';
		document.getElementById('heureDeclaration').style.visibility='hidden';
	});
	</script>
</body>
</html>