<?php 
session_start();
$enfants=array();
$mere=array();
$nomEnfant=array();
require("cssActe.php");
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
$datetime=new FormatDatetime();
$datetime->completeTimeTab();
$database=new PDO("mysql: host=localhost; dbname=etatCivil","root","");
$result=$database->query("SELECT * FROM acteReconnaissance WHERE numRec='".$_GET['numRec']."'");
$data=$result->fetch();
$numActe=$data['numActeRec'];
$annee=substr($data['dateRec'], 0,4);
$date=$datetime->getDateMalagasy($data['dateRec']);
$reconnaissance=reconnaissance(strlen($_GET['list']),$datetime,$data['dateRec'],$data['heureRec'],$data['nomOff'],$data['fonction'],$data['nomPere'],$data['profPers'],$data['lieuNaissPers'],$data['dateNaissPers'],$data['adressePers'],$data['age']);
function reconnaissance($nbr,$datetime,$dateRec,$heureRec,$nomOff,$fonction,$nomPere,$profPere,$lieuNaissPere,$dateNaissPere,$adrPere,$age){
	$paragraph1="Androany ".$datetime->getStringDate($dateRec).", tamin'ny ".$datetime->getStringTime($heureRec).", dia tonga teto anatrehanay ".$nomOff.fonction($fonction).", mpiandraikitra sora-piankohonana ao Ambalavao, ".getPersonne($nomPere, $dateNaissPere, $lieuNaissPere, $profPere, $age).", ka napananoratra anay ny fanjanahana an'".nombre_enfant("reconnaissance",$nbr);
	return $paragraph1;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="font/font.css">
	<script type="text/javascript" src="impression.js"></script>
	<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
	<article>
		<div id="head"> <button id="bouton" onclick="imprimer()">Imprimer</button> <button onclick="document.location='registre_reconnaissance.php'" id="bouton">Retour</button> | 
		Font <select id="font" onchange="changeFont(document.getElementById('font').value)"><option>Commercial Script BT</option>
		     <option>Times New Roman</option></select></div>
		<div id="etat">
		<div id="contenu">
		   <pre id="maj"><?php echo "\t\t\t\t\t\t \t \t\t\t\t\t      Lalàna N°61-025 \n\t\t\t\t\t\t\t\t \t\t\t\t Tamin'ny 09 Oktobra 1961\n \t\t\t\t\t\t\t\t\t\t\t\t\t* * * * * * *"?></pre>
		   <div id="act">
		   <p align="center" id="titre"><?php  echo "KOPIAN'NY SORA-PIANKOHONANA" ?> </p>
		   <?php if (strlen($_GET['list'])<=2) { echo "<br/>";} ?>
		   	<p id="maj">
				<span class="tab">_______</span><?php echo "Nalaina tamin'ny bokim-piankonana ao Ambalavao taona: ".$annee.", izao soratra manaraka izao "; ?>
			</p>		   
			<p>
				<span class="tab">_______</span><?php echo $reconnaissance; ?>
			</p>
				<?php
				$list=$_GET['list'];
				if (strlen($list)>1) {
				    $cpt=1;
				    for ($i=0; $i<strlen($list) ; $i++) {   	
				    	$personne=getPersonne($_SESSION['nomEnfant'.$list[$i]].ifExiste($_SESSION['prenomEnfant'.$list[$i]]," ".$_SESSION['prenomEnfant'.$list[$i]]), $_SESSION['dateNaissEnfant'.$list[$i]], $_SESSION['lieuNaissEnfant'.$list[$i]],$_SESSION['sexeEnfant'.$list[$i]],"0");
				    	if (($i+1)<strlen($list)) {
				    		if ($_SESSION['nomPere'.$list[$i]]." ".$_SESSION['prenomMere'.$list[$i]]!=$_SESSION['nomPere'.$list[$i+1]]." ".$_SESSION['prenomMere'.$list[$i+1]]) {
				    			if ($cpt>1) {
				    				echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne." samy zanak'i ".the_object($_SESSION['nomMere'.$list[$i]].ifExiste($_SESSION['prenomMere'.$list[$i]]," ".$_SESSION['prenomMere'.$list[$i]]))."<br/>";
				    			    $cpt=1;
				    			}
				    			else if($cpt==1){
				    				echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne." zanak'i ".the_object($_SESSION['nomMere'.$list[$i]].ifExiste($_SESSION['prenomMere'.$list[$i]]," ".$_SESSION['prenomMere'.$list[$i]]))."<br/>";
				    			}
				    		}
				    		else{
				    			echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne."<br/>";
				    			$cpt+=1;
				    		}
				    	} 
				    	else{
				    		if ($cpt>1) {
				    			echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne." samy zanak'i ".the_object($_SESSION['nomMere'.$list[$i]].ifExiste($_SESSION['prenomMere'.$list[$i]]," ".$_SESSION['prenomMere'.$list[$i]]))."<br/>";
				    		}
				    		else{
				    			echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne." zanak'i ".the_object($_SESSION['nomMere'.$list[$i]].ifExiste($_SESSION['prenomMere'.$list[$i]]," ".$_SESSION['prenomMere'.$list[$i]]))."<br/>";
				    		}
				    	}
				    }
				}
				else{
					$personne=getPersonne($_SESSION['nomEnfant'.$list[0]].ifExiste($_SESSION['prenomEnfant'.$list[0]]," ".$_SESSION['prenomEnfant'.$list[0]]), $_SESSION['dateNaissEnfant'.$list[0]], $_SESSION['lieuNaissEnfant'.$list[0]],$_SESSION['sexeEnfant'.$list[0]],"0");
					echo "<span class='tab'>_______</span>".$personne." zanak'i ".the_object($_SESSION['nomMere'.$list[0]].ifExiste($_SESSION['prenomMere'.$list[0]]," ".$_SESSION['prenomMere'.$list[0]]))."<br/>";

				}
				echo "<span class='tab'>_______</span>"; ?>
			</p>
			<p>
				<span class="tab">_______</span>Miara manao sonia aminay ny mpanao fanambarana rehefa novakiana taminy ity soratra ity
			</p>
			</div>
			<p id="maj" align="center"> SONIA MANARAKA EO AMBANY  <br/><br/>
		                    Kopia manontolo nadika tamin'ny boky androany <?php echo $datetime->getDateFrench(now($database)); ?> <br/><br/>
		                NY MPIANDRAIKITRA SORA-PIANKOHONANA  </p>
		</div>
		<div id="aside">
		    <img id="logo_acte" src="image/armoirie.jpg">
		    <p align="center">
			<span id='commercial'>Faha: <?php echo $numActe  ?><br/>
			<span class="underline"><?php echo "Fanjanahana";  ?></span></span><br/>
			<span id="act"><?php
			if (strlen($list)>1) {
				for ($i=0; $i <strlen($list) ; $i++) {;
				    echo "<span id='maj'>".($i+1)."</span>"."-";
				    ctrlSTR($_SESSION['nomEnfant'.$list[$i]]);
				    echo "<br/>".the_object($_SESSION['prenomEnfant'.$list[$i]])."<br/>";
			    }
			}
			else{
				echo ctrlSTR($_SESSION['nomEnfant'.$list[0]]);
				echo "<br/>".the_object($_SESSION['prenomEnfant'.$list[0]])."<br/>";
			}
			?>
			<br/></span><span id='commercial'>
			<?php echo "<span id='date'>".$date."</span></span>";  ?>

		    </p>
	    </div>
	    </div>
	    <div id="footer">
		<?php echo str_replace("-","", now())." ".str_replace(":","", temps())." ";
		echo cryptage(strtoupper($_SESSION['nomEnfant'.$list[0]]),strtoupper($_SESSION["nomUser"]));
		echo " ".$_SESSION['pseudo'];
		?>
	    </div>
	</article>
</body>
</html>