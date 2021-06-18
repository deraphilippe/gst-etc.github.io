<?php
session_start();
require("cssActe.php");
include("classe/FormatDatetime.php");
include("classe/fonction_util.php"); 
$datetime->completeTimeTab();
function avoir_jugement($numPers){
	global $datetime;
	global $database;
	$jugement="";
	$result=$database->query("SELECT numActeJug,dateJug FROM naissance_jugement WHERE numPers=".$numPers);
	while($data=$result->fetch()){
		$jugement=", jugement n°".$data["numActeJug"].", tamin'ny ".$datetime->getDateJugement($data["dateJug"]).", ";
	}
	return $jugement;
}
function avoir_autorisation($idAuto){
	global $datetime;
	global $database;
	$autoris="";
	$result=$database->query("SELECT * FROM autorisation WHERE idAuto='".$idAuto."'");
	while($data=$result->fetch()){
		$autoris=", araka ny fanomezan-dalana hisora-panambadiana N°".the_object($data["codeAuto"]).", tamin'ny ".$datetime->getStringDate($data["dateAuto"]);
		if (substr($data["donneur"], 0,9)=="fitsarana") {
			$autoris.=", navoakan'ny ".the_object($data["donneur"]);
		}
		else{
			$autoris.=", nomen'i ".the_object($data["donneur"]);
		}
	}
	return $autoris;
}
function date_copie($dateMariage){
	global $datetime;
	global $database;
	$result=$database->query("SELECT date(now()) as now");
	$now=($result->fetch())['now'];
	if ($dateMariage>$now) {
		echo $datetime->getDateFrench($dateMariage);
	}
	else if ($dateMariage<=$now) {
		echo $datetime->getDateFrench($now);
	}
} 
function avoir_situation_mat($code){
	global $database;
	$sitMat="";
	$result=$database->query("SELECT description FROM situation_matrimoniale WHERE codeSit='".$code."'");
	while($data=$result->fetch()){
		$sitMat=" ".the_object($data["description"]).", ";
	}
	return $sitMat;
}
function get_parent_mariage($parent){
	global $database;
	global $datetime;
	$result=$database->query("SELECT * FROM acteMariage WHERE numMariage='".$_GET['numMariage']."'");
	$data=$result->fetch();
	$infoParent="";
	if ($data["nom".$parent]!="") {
		if ($data["viv".$parent]=="oui") {
			$infoParent=getPersonne($data["nom".$parent."Complet"], $data["dateNaiss".$parent], $data["lieuNaiss".$parent], $data["prof".$parent], "0");
		}
		else
			$infoParent=the_object($data["nom".$parent."Complet"]);
	}
	return $infoParent;
}
function personne($pers){
	global $datetime;
	global $database;
	$result=$database->query("SELECT * FROM acteMariage WHERE numMariage='".$_GET['numMariage']."'");
	$data=$result->fetch();
	$autre=$data["prof".$pers].", mizaka ny zom-pirenena ".$data["national".$pers];
	$information=getPersonne($data["nom".$pers."Complet"],$data["dateNaiss".$pers],$data["lieuNaiss".$pers],$autre,"0");
	$information.=avoir_jugement($data["num".$pers]).", monina ao ".$data["adr".$pers];
	$mere=get_parent_mariage("Mere".$pers);
	$pere=get_parent_mariage("Pere".$pers);
	$information.=", zanak'i ";
	if ($pere!="") {
		if ($data["vivMere".$pers]==$data["vivPere".$pers] && $data["vivPere".$pers]=="oui") {
		    if ($data["adrPere".$pers]==$data["adrMere".$pers]) {
		    	$information.=$pere." sy ".$mere.", samy monina ao ".the_object($data["adrPere".$pers]);
		    }
		    else{
		    	$information.=$pere.", monina ao ".the_object($data["adrPere".$pers])." sy ".$mere.", monina ao ".the_object($data["adrMere".$pers]);
		    }
	    }
	    else if($data["vivMere".$pers]==$data["vivPere".$pers] && $data["vivPere".$pers]=="non"){
	    	$information.=$pere." sy ".$mere." samy efa maty";
	    }
	    else{
	    	$information.=$pere.vivant($data["vivPere".$pers]).ifExiste($data["adrPere".$pers],", monina ao ".the_object($data["adrPere".$pers]))." sy ".$mere.vivant($data["vivMere".$pers]).ifExiste($data["adrMere".$pers],", monina ao ".the_object($data["adrMere".$pers]));
	    }
	}
	else{
		if ($data["vivMere".$pers]=="oui") {
			$information.=the_object($mere).ifExiste($data["adrMere".$pers],", monina ao ".the_object($data["adrMere".$pers]));
		}
		else{
			$information.=the_object($mere).", efa maty";
		}
	}
	$information.=avoir_situation_mat($data["num".$pers]."-".$data["dateMariage"]);
	$information.=avoir_autorisation($data["num".$pers]."-".$data["dateMariage"]);
	return $information;
}
$result=$database->query("SELECT * FROM acteMariage WHERE numMariage='".$_GET['numMariage']."'");
$data=$result->fetch();
$codeReg=explode("-", $data['codeReg']);
$nomOff=$data["nomOff"];
$fonction=$data["fonction"];
$dateMariage=$data['dateMariage'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="font/font.css">
	<script type="text/javascript" src="impression.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
	<article>
		<div id="head">
			<button id="bouton" onclick="imprimer()">Imprimer</button> <button onclick="document.location='registre_mariage.php'" id="bouton">Retour</button> | 
		Font <select id="font" onchange="changeFont(document.getElementById('font').value)"><option>Commercial Script BT</option>
		     <option>Times New Roman</option></select>
		</div>
		<div id="etat">
		<div id="aside">
		    <img id="logo_acte" src="image/armoirie.jpg">
		    <p align="center"><?php echo "<span id='commercial'>Faha:".$data["numActeMariage"]."<br/>";
		          echo "<span class='underline'>Sora-panambadiana</span><br/><br/>";
		          echo ctrlSTR($data["nomHomme"])."<br/>";
		          echo the_object($data["prenomHomme"])."<br/><br/>"; 
		          echo "Sy<br/><br/>";
		          echo ctrlSTR($data["nomFemme"])."<br/>";
		          echo the_object($data["prenomFemme"])."<br/><br/>";
		          echo "<span  id='date'>".$datetime->getDateMalagasy($data["dateMariage"])."</span><br/>";
		    ?>
		    <p>
	    </div>
		<div id="contenu">
		   <pre id="maj" style="margin:0px; padding: 0px">
		   <?php
		    echo "\t\t\t\t\t\t\t\t\t       Lalàna N°61-025 \n\t\t\t\t\t\t\t\t\t\t \t Tamin'ny 09 Oktobra 1961\n \t\t\t\t\t\t\t\t\t\t\t\t* * * * * * *\n";	?></pre>
		     <p id='titre' align="center" style="margin:0px; padding: 0px">KOPIAN'NY SORA-PIANKOHONANA</p>
		    
				<span class="tab">_______</span><span id="maj"><?php echo "Nalaina tamin'ny bokim-piankohonana ao Ambalavao taona: ".$codeReg[1].", izao soratra manaraka izao: "; ?></span>		   
				<div id="act" class="act1"><span class="tab">_______</span>
				<?php echo "Androany ".$datetime->getStringDate($data['dateMariage']).", tamin'ny ".$datetime->getStringTime($data["heureMariage"]).", dia tonga teto anatrehanay, ".$data["nomOff"].",".ifExiste($data["fonction"]," ".$data["fonction"].", ")." mpiandraikitra sora-piankohonana ao Ambalavao";
				?><br/>
				<span class="tab">_______</span>
				<?php echo "<span id='times'>1-</span>".personne("Homme")?><br/>
				<span class="tab">_______</span>
				<?php echo "<span id='times'>2-</span>".personne("Femme")?><br/>
				<span class="tab">_______</span>
				<?php echo "Samy milaza izy ireo fa mifanaiky ny hifampiakatra ka dia ambaranay amin'ny anaran'ny lalàna, fa mpivady marina izy ireo hatramin'izao,"?><br/>
				<span class="tab">_______</span>
				<?php
				$tem=array();
				echo "Ny fanoratana dia natao teo anatrehan'i "; 
				for ($i=1; $i <3 ; $i++) { 
					$tem[$i-1]=getPersonne($data["nomTem".$i."Complet"],$data["dateNaissTem".$i],$data["lieuNaissTem".$i],$data["profTem".$i],"0").", monina ao ".the_object($data["adrTem".$i]);
				}
				echo $tem[0]." sy ".$tem[1];
			    ?>
			<br/>
			<span class="tab">_______</span>
				<?php
				echo "Ka rehefa novakiana taminy ity soratra ity dia miara-manao sonia aminay izy mivady sy ny vavolombelona."; 
			    ?>
			</div>
			<p id="maj" align="center">SONIA MANARAKA EO AMBANY  <br/><br/>
			 Kopia manontolo nadika tamin'ny boky androany <?php date_copie($dateMariage); ?><br/><br/>
		                NY MPIANDRAIKITRA SORA-PIANKOHONANA </p>
		</div>
	    </div>
	    <div id="footer">
		<?php echo str_replace("-","", now())." ".str_replace(":","", temps())." ".cryptage(strtoupper($data["nomHomme"]),strtoupper($_SESSION["nomUser"])); 
		    echo " ".$_SESSION['pseudo']; ?>
	</div>
	</article>
	<script type="text/javascript">
		document.getElementById("head").style.width='40%';
		document.getElementById("font").addEventListener('change',function(e){
			document.querySelector(".act1").style.fontFamily=document.getElementById("font").value;
		});
		document.getElementById("taille").addEventListener('change',function(e){
			document.querySelector(".act1").style.fontSize=document.getElementById("taille").value+"px";
		});
	</script>
</body>
</html>