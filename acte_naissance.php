<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="font/font.css">
	<script type="text/javascript" src="impression.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
<style type="text/css">
</style>
</head>
<?php 
session_start();
require("cssActe.php");
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
$datetime->completeTimeTab();
$query="SELECT a.*, d.*, p.* from acteNaissance a, declarerNaiss d, personne p WHERE a.numNaiss=d.numNaiss and d.numPers=p.numPers and a.numNaiss='".$_GET["numNaiss"]."'";
$array=array();
function verif($string1, $string2, $vrai, $faux){
	$str="";
	if ($string1!=$string2 && $string1!=' ') {
		$str=$vrai;
	}
	else{
		$str=$faux;
	}
	return $str;
}
function legitimite($legitime){
	$str="";
	if($legitime=="non"){
		$str=", izay manambara fa manjanaka azy";
	}
	return $str;
}
function getName($legitime){
	$str="";
	if($legitime=="non"){
		$str="Fahaterahana sy fanjanahana";
	}
	else{
		$str="Fahaterahana";
	}
	return $str;
}
function declarant($datetime,$declarant,$nom,$prenom,$profesion,$dateNaiss,$lieuNaiss,$adresse,$age,$present){
	if ($declarant!="Rain-jaza") {
		$declarant="'i ".the_object($nom." ".$prenom).ifExiste($declarant,", ".$declarant.", ").ifExiste($profesion,", ".$profesion).ifExiste($lieuNaiss,", teraka tao ".the_object($lieuNaiss).", ");
		if ($dateNaiss!="-00-00") {
			if (ifExiste($lieuNaiss,"teraka")=="teraka") {
				$declarant.=" tamin'ny ".$datetime->getStringDate($dateNaiss);
			}
			else{
				$declarant.=", teraka tamin'ny ".$datetime->getStringDate($dateNaiss);
			}
		}
		if ($age!=0) {
			$declarant.=", ".$datetime->getStringAge($age);
		}
		$declarant.=ifExiste($adresse,", monina ao ".$adresse);
	}
	else{
		$declarant="-dRain-jaza";
	}
	if ($present=="oui") {
		$declarant.=", nanatrika fiterahana";
	}
	return $declarant;
}

?>
<style type="text/css">
</style>
<body>
	<article>
	<div id="head"> <button id="bouton"  onclick="imprimer()">Imprimer</button> <button onclick="document.location='registre_naissance.php'" id="bouton">Retour</button><input type="radio" id="prem" name="1">1e copie <input type="radio" id="non" checked name="1">Non | 
		Font <select id="font" onchange="changeFont(document.getElementById('font').value)"><option>Commercial Script BT</option>
		     <option>Times New Roman</option></select> </div>
	<div id="etat">
	<div id="contenu">
	    <?php
        $result=$database->query($query);
		while($data=$result->fetch()){
			$array[0]=$data["numActeNaiss"];
			$array[1]=$data["legitime"];
			$array[2]=$data["nomEnfant"];
			$array[3]=$data["prenomEnfant"];
			$array[4]=$data["dateNaissEnfant"];
			?>
		   <p id="maj" align="center">Lalàna N°61-025<br/>
		   Tamin'ny 09 Oktobra 1961</p><br/>
		   <p align="center"><span id="titre">KOPIA SORA-PIANKOHONANA</span></p><br/>
		   <p id="maj"><span class="tab">_______</span>
			<?php echo "    Nalaina tamin'ny bokim-piankohonana ao Ambalavao, taona:</dd> ".substr($data["dateNaissEnfant"],0,4).", izao soratra manaraka izao:"; ?>
			 </p>
			<div id="act">
			<p><span class="tab">_______</span>
				<?php echo "    Tamin'ny ".$datetime->getStringDate($data["dateNaissEnfant"]).
			", tamin'ny ".$datetime->getStringTime($data["heureNaissEnfant"]).
			" no teraka tao ".the_object($data["lieuNaissEnfant"]).", ".the_object($data["nomEnfant"].
			" ".$data["prenomEnfant"]).", ".$data["sexeEnfant"].", zanak'i ".
			getPersonne($data["nomPere"],$data["dateNaissPere"],$data["lieuNaissPere"],$data["profPere"],$data["agePere"]).
			ifExiste($data['nomPere'],setAdresseParent(false, $data['adrPere'],$data['adrMere'])).
			ifExiste($data["nomPere"],legitimite($data["legitime"])).ifExiste($data["nomPere"]," sy ").
			
			getPersonne($data["nomMere"],$data["dateNaissMere"],$data["lieuNaissMere"],$data["profMere"],$data["ageMere"]).
			setAdresseParent(true, $data['adrMere'],$data['adrPere']) ; ?>
				
			</p>
			<p><span class="tab">_______</span>
				<?php echo "    Nosoratana androany ".$datetime->getStringDate($data["dateDecNaiss"]).
				heureDec($datetime,$data["heureDecNaiss"])." araky ny fanambarana nataon".declarant($datetime,$data['declarant'],$data['nomPers'],$data['prenomPers'],$data['profPers'],$data['dateNaissPers'],$data['lieuNaissPers'],$data['adressePers'],$data["age"],$data['present']).", izay miara-manao sonia aminay ".$data["nomOff"].ifExiste($data["fonction"],", ".$data['fonction']).off($data['codeReg'])
				
				?>
			</div>
			<div id="maj">
			</p>
						<p align="center"> SONIA MANARAKA EO AMBANY  </p>
						<?php mention($database,$data['numNaiss']); ?>
		    <p align="center">Kopia manontolo nadika tamin'ny boky androany
		    <?php echo $datetime->getDateFrench(now($database)); ?> </p>
		                <p align="center"><?php echo "\t\t" ?> NY MPIANDRAIKITRA SORA-PIANKOHONANA  </p></div>
		   
		<?php
		break;
		}
		?>
	</div>
	</div>
	<div id="aside">
		<img id="logo_acte" src="image/armoirie.jpg">
	    <p align="center">
			<span id='commercial'>Faha: <?php echo $array[0];  ?><br/>
			<span class="underline"><?php echo getName($array[1]);  ?></span><br/><br/>
			<?php echo ctrlSTR($array[2]);  ?><br/>
			<?php echo $array[3];  ?><br/><br/>
			<?php echo "<span id='date'>".$datetime->getDateMalagasy($array[4])."</span></span>";  ?><br/>
			<br/>
			<p align="center" id='maj'><?php if ($data['jumeau']!="unique") { echo $data['jumeau'];}  ?></p>
			<p align="center" id="premier"><span id='maj'><?php echo "KOPIA VOALOHANY<br/> OMENA TSY MISY SARANY";  ?></p>
		</p>
	</div>
	</div>
	<div id="footer">
		<?php echo str_replace("-","", now())." ".str_replace(":","", temps())." ".cryptage(strtoupper($array[2]),strtoupper($_SESSION["nomUser"])); 
		    echo " ".$_SESSION['pseudo']; ?>
	</div>
	</article>
</body>
<script type="text/javascript">
	document.getElementById("premier").style.visibility="hidden";
	document.getElementById("prem").addEventListener('click',function(e){
		document.getElementById("premier").style.visibility="visible";
	})
	document.getElementById("non").addEventListener('click',function(e){
		document.getElementById("premier").style.visibility="hidden";
	})
</script>
</html>