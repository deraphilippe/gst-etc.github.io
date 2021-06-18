<?php 
session_start();
require("cssActe.php");
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
require("devise.php");
$datetime=new FormatDatetime();
$datetime->completeTimeTab();
$database=new PDO("mysql: host=localhost; dbname=etatCivil","root","");
$result=$database->query("SELECT * FROM acteDeces WHERE numDeces='".$_GET['numDeces']."'");
$data=$result->fetch();
$numActe=$data['numActeDeces'];
$codeReg=explode("-", $data['codeReg']);
$nomOff=$data["nomOff"];
$fonction=$data["fonction"];
if ($data["typeDec"]=="jugement") {
	$result=$database->query("SELECT * FROM jugementdeces WHERE numDeces='".$_GET['numDeces']."'");
    $data=$result->fetch();
    $dateJugement=$data["dateJugement"];
    $nomJuge=$data["nomJuge"];
    $nomGreffier=$data["nomGreffier"];
}
function paragraph1($database,$numDeces, $datetime){
	$result=$database->query("SELECT * FROM acteDeces WHERE numDeces='".$numDeces."'");
	$data=$result->fetch();
	if ($data["typeDec"]=="declaration") {
		$autre=getSP($data["sexeDecedes"],$data["profDeces"]);
		$paragraph="Tamin'ny ".$datetime->getStringDate($data["dateDeces"]).", tamin'ny ".$datetime->getStringTime($data["heureDeces"]).", no maty tao ".the_object($data["lieuDeces"]).", ".
		getPersonne($data["nomDeces"], $data["dateNaissDeces"], $data["lieuNaissDeces"], $autre,"0").ifExiste($data["adrDeces"],", nonina tao ".the_object($data["adrDeces"])).", zanak'i ".
		getPersonne($data["nomPere"],"-00-00","",$data["profPere"],"0").
		ifExiste($data['adrPere'],setAdresseParent(false, $data['adrPere'],$data['adrMere'])).
		ifExiste($data["nomPere"],setVivant(false,$data['vivantPere'],$data['vivantMere'])).
		ifExiste($data["nomPere"],", sy ").
		getPersonne($data["nomMere"],"-00-00","",$data["profMere"],"0").
		ifExiste($data['adrMere'],setAdresseParent(true, $data['adrMere'], $data['adrPere']));
		$paragraph.=setVivant(true,$data['vivantMere'],$data['vivantPere']);
	}
	else{
		$result=$database->query("SELECT * FROM jugementdeces WHERE numDeces='".$numDeces."'");
	    $data=$result->fetch();
	    $dateJugement=$datetime->getDateMalagasy($data["dateJugement"]);
		$paragraph="Araky ny ventin'ny didim-pitsarana laharana faha ".$data["numJugement"].", navoakan'ny Fitsarana ambaratonga voalohany ao Fianarantsoa, tamin'ny ".$dateJugement." dia toy izao manaraka izao ny fandidiany: ";
	}
	return $paragraph;
}
function paragraph2($database,$numDeces, $datetime){
	$result=$database->query("SELECT * FROM acteDeces WHERE numDeces='".$numDeces."'");
	$data=$result->fetch();
	if ($data["typeDec"]=="declaration") {
		$result=$database->query("SELECT acte.*, d.*, concat(p.nomPers,' ',p.prenomPers) as nomPers, p.profPers, p.lieuNaissPers, p.dateNaissPers, p.adressePers FROM acteDeces acte, declarerDeces d, personne p WHERE acte.numDeces=d.numDeces and d.numPers=p.numPers and  acte.numDeces='".$numDeces."'");
		$data=$result->fetch();
		$autre=$data["nomPers"].ifExiste($data["declarant"],", ".$data["declarant"]);
		$paragraph="Nosoratana androany ".$datetime->getStringDate($data["dateDecDeces"]).", tamin'ny ".$datetime->getStringTime($data["heureDecDeces"]).", araky ny fanambarana nataon'i ".getPersonne($autre, $data["dateNaissPers"], $data["lieuNaissPers"], $data['profPers'], "0").ifExiste($data["adressePers"],", monina ao ".the_object($data["adressePers"])).", "." izay miara-manao sonia aminay ".$data["nomOff"].", ".ifExiste($data["fonction"],$data["fonction"].", ")." mpiandraikitra sora-piankohonana ao Ambalavao, rehefa novakiana taminy ity soratra ity.";
	}
	else{
		$paragraph="Lazaina fa tamin'ny ".$datetime->getStringDate($data["dateDeces"]).", no maty tao ".$data["lieuDeces"].", ".the_object($data["nomDeces"]).", ".$data["sexeDecedes"].", zanak'i ".set_parents_vivant($data["nomPere"],$data["vivantPere"],$data["nomMere"],$data["vivantMere"]);
	}
	return $paragraph;
}
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
		<div id="head"> <button id="bouton" onclick="imprimer()">Imprimer</button> <button onclick="document.location='registre_deces.php'" id="bouton">Retour</button> | 
		Font <select id="font" onchange="changeFont(document.getElementById('font').value)"><option>Commercial Script BT</option>
		     <option>Times New Roman</option></select></div>
		<div id="etat">
		<div id="contenu">
			<div id="act">
		   <pre id="maj">
		   <?php
		   $result=$database->query("SELECT * FROM acteDeces WHERE numDeces='".$_GET['numDeces']."'");
		   $data=$result->fetch();
		    if ($data['typeDec']=="jugement") {
		    	echo "\nREPOBLIKAN'I MADAGASIKARA\t\t\t\t\t\t\t Lalàna N°61-025 \n$devise\t\t\t\t\t\t Tamin'ny 09 Oktobra 1961\n \t\t* * * * * * *";
		    }
		    else{
		        echo "\t\t\t\t\t\t\t\t\t       Lalàna N°61-025 \n\t\t\t\t\t\t \t\t\t\t Tamin'ny 09 Oktobra 1961\n \t\t\t\t\t\t\t\t\t\t\t* * * * * * *";
		    }	
		    ?></pre><br/>
		   <p align="center" id="maj"><span id="titre"><?php  echo "KOPIAN'NY SORA-PIANKOHONANA" ?> </span></p><br/>
		   	<p>
				<span id="maj"><span class="tab">_______</span><?php echo "Nalaina tamin'ny bokim-piankonana ao Ambalavao taona: ".$codeReg[1].", izao soratra manaraka izao: "; ?></span>
			</p>		   
			<p>
				<span class="tab">_______</span>
				<?php echo paragraph1($database,$_GET['numDeces'], $datetime) ;
				if ($data["typeDec"]=="jugement") {
	                echo "<br/><span class='tab'>_____</span>-Ny Mpitsara: ".the_object($nomJuge)."<br/>";
					echo "<span class='tab'>_____</span>-Ny Mpiraki-draharaha: ".the_object($nomGreffier)."<br/>";
				}
				?>

			</p>
			<p>	<?php 
			    $result=$database->query("SELECT * FROM acteDeces WHERE numDeces='".$_GET['numDeces']."'");
			    $data=$result->fetch();
				if ($data["typeDec"]=="jugement") {
					echo "<pre id='maj'>\t\t\t\t\t\t''NOHO IREO ANTONY IREO''</pre>";
				}
				?>
				<span class="tab">_______</span>
				<?php
				echo paragraph2($database,$_GET['numDeces'], $datetime);
			    if ($data["typeDec"]=="jugement") {
					echo "<br/><br/><span class='tab'>_______</span>"."Fandikana amin'ny boky ataonay ".$nomOff.", ".ifExiste($fonction,$fonction.", ")." mpiandraikitra sora-piankohonana an Ambalavao, androany ".$datetime->getDateMalagasy(now());
				}
				?>
			</p>
			</div>
			<br/>	
			<p align='center' id="maj"> SONIA MANARAKA EO AMBANY  <br/><br/>
		      Kopia manotolo nadika tamin'ny boky androany
		    <?php echo $datetime->getDateFrench(now($database)); ?> </br><br/>
		               NY MPIANDRAIKITRA SORA-PIANKOHONANA  </p>
		</div>
		<div id="aside">
		    <img id="logo_acte" src="image/armoirie.jpg">
		    <p align="center">
			<span id='commercial'>Faha: <?php echo $numActe  ?><br/>
			<span class="underline"><?php 
			echo "Fahafatesana";
			?></span><br/><br/>
			<?php
			if ($data['typeDec']=="jugement") {
				echo "Tamin'ny ".$datetime->getDateMalagasy($dateJugement)."no nanoratana ny didim-pitsarana misolo ny sora-pahafatesan'i<br/><br/></span>";
			}  
			echo ctrlSTR($data["nomDef"])."<br/>";
			echo $data["prenomDef"]."<br/>";
			?>
			<br/>
			<span id='date'><?php echo $datetime->getDateMalagasy($data["dateDeces"])."</span></span>";  ?><br/>

		    </p>
	    </div>
	    </div>
	    <div id="footer">
		<?php echo str_replace("-","", now())." ".str_replace(":","", temps())." ".cryptage(strtoupper($data["nomDef"]),strtoupper($_SESSION["nomUser"])); 
		    echo " ".$_SESSION['pseudo']; ?>
	    </div>
	</article>
</body>
</html>