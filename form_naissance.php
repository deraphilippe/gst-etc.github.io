<?php 
    include("header.php");
    include("classe/FormatDatetime.php");
    include("classe/fonction_util.php");
    $database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
    function action(){
    	$url="ajout_naissance.php";
    	if (isset($_GET['numNaiss'])) {
    		$url="modif_naissance.php?numNaiss='".$_GET['numNaiss']."'";
    	}
    	return $url;
    }
?>
</header>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="
	    array_enfant=['typeNaiss','legitime','numActeNaiss','nomEnfant','prenomEnfant','sexeEnfant',
		'lieuNaissEnfant','dateNaissEnfant','heureNaissEnfant','codeReg','numOff','jumeau'];
	    array_declarant=['nomDec','prenomDec','lieuNaissDec','dateNaissDec','profDec','declarant','dateDecNaiss','heureDecNaiss','present','adrDec'];
	    array_parent=['nomMere','prenomMere','dateNaissMere','lieuNaissMere','profMere','adrMere','vivPere','vivMere','ageMere','agePere',
		'nomPere','prenomPere','dateNaissPere','lieuNaissPere','profPere','adrPere'];
		array_jugement=['numJugement','dateJugement','dateReception','dateEnregistre','origineJugement'];
        complete_champ(array_enfant);
        set_officier(form1.elements['numOff'].value);
        complete_champ(array_parent);
        if (form0.declaration.checked==true) {
        	showDeclaration();
        	document.getElementById('vivantMere').style.visibility='hidden';
    	    document.getElementById('vivantPere').style.visibility='hidden';
        	complete_champ(array_declarant);
        }
        else if (form0.jugement.checked==true){
        	showJugement();
        	document.getElementById('vivantMere').style.visibility='visible';
    	    document.getElementById('vivantPere').style.visibility='visible';
        	complete_champ(array_jugement);
        }
        set_valueOf('dateNaissEnfant','Enfant');
        set_valueOf('dateNaissDec','Dec');
        set_valueOf('dateNaissPere','Pere');
        set_valueOf('dateNaissMere','Mere');
        ">
	<header>
	<section>
		<div id="side">
			<img id="photo" src="image/bebe.jpg">
		</div>
		<div id="formulaire">
		<form id="form0" enctype="multipart/form-data" action="<?php echo action() ?>" method="post">
			<div id="formulaire0">
			<fieldset>
				<p>Type: <input type="radio" name="typeNaiss" checked id="declaration" value="declaration">Déclaration  
					     <input type="radio" id="jugement" name="typeNaiss" value="jugement">Jugement <span  style="padding-left: 20px; color: red"> Image de la registre:<input type="file" name="image" value="Importer une image" size="20"></span>
					     <input type="submit"  id="bouton" class="submit"  
					     value="<?php 
					     if(isset($_GET['numNaiss'])){
					     	echo 'Valider modification';
					     } 
					     else{
					     	echo 'Enregistrer';
					     }
					     ?>">

					    <input type="reset" id="bouton"></p>
			<div id="barreOff">
		    	<p>Officier <select name="numOff"><?php getOfficier($database); ?> </select> 
		        Registre <select name="codeReg"><?php getRegistre($database, "SELECT codeReg FROM registre WHERE nomReg='naissance' or nomReg='jugement'"); ?> </select> </p>
		    </div>
			</fieldset>	
		    </div>
			<div id="formulaire1">
			<fieldset>
				<legend>A propos de l'enfant</legend>
				<p id="legitimite">Légitimité <input type="radio" name="legitime" value="oui"> Oui 
						<input type="radio" name="legitime" checked value="non"> Non </p>

				<p><input type="text" placeholder="N°acte" name="numActeNaiss" required></p>

				<p><input type="text" placeholder="Nom de l'enfant" name="nomEnfant"></p>

				<p><input type="text" placeholder="Prenom de l'enfant" name="prenomEnfant"></p>

				<input type="hidden" name="dateNaissEnfant">
				<p>Date de naissance
				  <select name="dayEnfant"><?php getDay() ?></select>/
				  <select name="monthEnfant"><?php getMonth() ?></select>/
				  <input type="text" name="yearEnfant" placeholder="2000" size="1">
				</p>

				<p>Heure de naissance <input type="time" name="heureNaissEnfant" placeholder="2000" size="1"></p>
				
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissEnfant">
				<p>Sexe <input type="radio" name="sexeEnfant" value="zazalahy">Zazalahy 
						<input type="radio" checked name="sexeEnfant" value="zazavavy">Zazavavy</p>
				<p><input type="radio" checked="" name="jumeau" value="unique">Unique <br/> <input type="radio" name="jumeau" value="Kambana I">Jumeau(lle) I <br/><input type="radio" name="jumeau" value="Kambana II">Jumeau(lle) II</p>
			</fieldset>
			</div>
			<div id="form_declaration">
				<fieldset>
				<legend>A propos du déclarant</legend>
				<p> <input type="radio" name="declarantChecked" id="checked_pere" value="pere"> Père 
					<input type="radio" name="declarantChecked" id="checked_autre" checked value="autre"> Autre</p>
				
				<div id="form_declarant">
				<p><input type="text" placeholder="Nom du déclarant" name="nomDec"></p>
				
				<p><input type="text" placeholder="Prénom du déclarant" name="prenomDec"></p>
				
				<p><input placeholder="Profession" type="text"  name="profDec"></p>
				
				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissDec"></p>	
				<input type="hidden" name="dateNaissDec">
				<p>Date de naissance
				  <select name="dayDec"><?php getDay() ?></select>/
				  <select name="monthDec"><?php getMonth() ?></select>/
				  <input type="text" name="yearDec" placeholder="2000" size="1"> </p>
				</p>
							
				<p><input placeholder="Domicile" type="text"  name="adrDec"></p>
				<p><input placeholder="Age du déclarant" type="text"  name="ageDec"></p>
			    <p><input type="radio"  name="present" value="oui">Présent à l'accouchement <input type="radio"  name="present" checked value="non">Non
			    </div>
			    </fieldset>
			    <fieldset>
				<legend >A propos de la déclaration</legend>
			    <p>Date de déclaration <input type="date" name="dateDecNaiss"></p>
			    
			    <p>Heure de déclaration<input type="time" name="heureDecNaiss" placeholder="2000" size="1">
				</p>
				
				<p><input type="text" id="dec" placeholder="Lien avec le déclarant" name="declarant"></p></p>
			</div>
			<div id="form_jugement">    
			    </fieldset>
			    <fieldset >
				<legend>A propos de la jugement</legend>
				<p><input type="text" placeholder="N°jugement" name="numJugement"></p>
				<p>Date de jugement <input type="date" placeholder="" name="dateJugement"></p>
			    <p>Date de reception <input type="date" name="dateReception"></p>			                 
	            <p>Date d'enregistrement <input type="date" name="dateEnregistre"></p>
	            <p>Lieu du jugement 
	            	<select name="origineJugement"> 
	            		<option>Ambaratonga voalohany ao Fianarantsoa</option>
	            		<option>ao Fianarantsoa</option>
	            		<option>ao Ambalavao</option>
	            	</select>
	            </p>
			    </fieldset>
			</div>
			<div id="formulaire3">
			<fieldset>
				<legend>A propos du père</legend>
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
				<p><input placeholder="Adresse" type="text"  name="adrPere"></p>
				<p><input placeholder="Age" type="text" id="agePere"  name="agePere"
				value=""></p>
				<span id="vivantPere">
				<p><input type="radio" value="oui" checked name="vivPere">Père encore en vie
			    	<input type="radio" value="non" name="vivPere">non
			    </span>
			</fieldset>

			<fieldset>
				<legend>A propos de la mère</legend>
				<p><input type="text" placeholder="Nom de la mère" name="nomMere" required></p>

				<p><input type="text" placeholder="Prénom de la mère" name="prenomMere"></p>
				<p><input placeholder="Profession" type="text"  name="profMere"></p>

				<p><input placeholder="Lieu de naissance" type="text"  name="lieuNaissMere">

				<input type="hidden" name="dateNaissMere">
				<p>Date de naissance
				  <select name="dayMere"><?php getDay() ?></select>/
				  <select name="monthMere"><?php getMonth() ?></select>/
				  <input type="text" name="yearMere" placeholder="2000" size="1"> </p>
				</p>
				<p><input placeholder="Adresse" type="text"  name="adrMere"></p>
				<p><input placeholder="Age" type="text" id="ageMere" name="ageMere"
				value=""></p>
				<span id="vivantMere">
				<p><input type="radio" value="oui" checked name="vivMere">Mère encore en vie
			    	<input type="radio" value="non" name="vivMere">non
			    </span>
			</fieldset>
			</div>
	    </form>
	    </div>      
	</section>
	<form id="form1">
	<?php
	$array_enfant=array("typeNaiss",'legitime',"numActeNaiss","nomEnfant","prenomEnfant","sexeEnfant",
		"lieuNaissEnfant","dateNaissEnfant",'heureNaissEnfant','codeReg','numOff','jumeau');
	$array_parent=array("nomMere","prenomMere","dateNaissMere","lieuNaissMere","profMere","adrMere","agePere","vivPere","nomPere","prenomPere","dateNaissPere","lieuNaissPere","profPere","adrPere","ageMere","vivMere");
	$array_declarant=array('nomDec','prenomDec','lieuNaissDec','dateNaissDec','profDec','declarant','dateDecNaiss','heureDecNaiss','present','adrDec');
	$array_jugement=array('numJugement','dateJugement','dateReception','dateEnregistre','origineJugement');
	if (isset($_GET["numNaiss"])) {
		$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
		$result=$database->query("SELECT * FROM parentnaissance WHERE numNaiss='".$_GET["numNaiss"]."'");
		$data=$result->fetch();
		foreach ($array_parent as $elt) {?>
			<input type='hidden' name="<?php echo $elt; ?>" value="<?php echo $data[$elt]; ?>">
			<?php
		}
		$result=$database->query("SELECT * FROM naissance WHERE numNaiss='".$_GET["numNaiss"]."'");
		$data=$result->fetch();
		foreach ($array_enfant as $elt) { ?>
			<input type='hidden' name="<?php echo $elt; ?>" value="<?php echo $data[$elt]; ?>">
		<?php
		}
		if ($data["typeNaiss"]=="declaration") {
			$result=$database->query("SELECT * FROM declarantnaissance WHERE numNaiss='".$_GET["numNaiss"]."'");
			$data=$result->fetch();
			foreach ($array_declarant as $elt) {?>
				<input type='hidden' name="<?php echo $elt; ?>" value="<?php echo $data[$elt]; ?>">
			<?php
			}
		}
		else{
			$result=$database->query("SELECT * FROM jugementnaissance WHERE numNaiss='".$_GET["numNaiss"]."'");
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
	document.querySelector(".submit").addEventListener('click', function(e){
		if(form0.numJugement.value=="" && form0.nomDec.value=="" && document.getElementById("checked_pere").checked==false){
			document.getElementById("content-err").style.visibility="visible";
			e.preventDefault();
		}
	});
	document.getElementById("bout").addEventListener('click',function(){
		document.getElementById("content-err").style.visibility="hidden";
	})	
	document.getElementById("vivantMere").style.visibility='hidden';
    document.getElementById("vivantPere").style.visibility='hidden';
	document.getElementById("naissance").style.backgroundColor="yellow";
	document.getElementById("naissance").style.border="1px yellow solid";
	function set_date(){
		form0.dateNaissPere.value=form0.yearPere.value+"-"+form0.monthPere.value+"-"+form0.dayPere.value;
		form0.dateNaissMere.value=form0.yearMere.value+"-"+form0.monthMere.value+"-"+form0.dayMere.value;
		form0.dateNaissDec.value=form0.yearDec.value+"-"+form0.monthDec.value+"-"+form0.dayDec.value;
		form0.dateNaissEnfant.value=form0.yearEnfant.value+"-"+form0.monthEnfant.value+"-"+form0.dayEnfant.value;
	}
	document.querySelector(".submit").addEventListener('click',function(e){
		set_date();
	});
	document.getElementById("checked_pere").addEventListener('click',function(){
	document.getElementById("dec").value="Rain-jaza";
	document.getElementById("form_declarant").style.visibility="hidden";});
    document.getElementById("checked_autre").addEventListener('click',function(){
	document.getElementById("form_declarant").style.visibility="visible";
	document.getElementById("dec").value="";});
    document.getElementById("declaration").addEventListener('click',function(){
    	showDeclaration();
    	document.getElementById("vivantMere").style.visibility='hidden';
    	document.getElementById("vivantPere").style.visibility='hidden';
    	document.getElementById("form_declarant").style.visibility="visible";
    	document.getElementById("checked_autre").checked=true;
    });
    document.getElementById("jugement").addEventListener('click',function(){
    	showJugement();
    	document.getElementById("vivantMere").style.visibility='visible';
    	document.getElementById("vivantPere").style.visibility='visible';
    });
	</script>
	<script src="javascript.js"></script>
</body>
</html>