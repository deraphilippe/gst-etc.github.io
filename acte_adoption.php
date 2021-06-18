<?php 
session_start();
require("cssActe.php");
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
$datetime=new FormatDatetime();
$datetime->completeTimeTab();
$database=new PDO("mysql: host=localhost; dbname=etatCivil","root","");
$result=$database->query("SELECT * FROM acteAdoption WHERE numAdopt='".$_GET['numAdopt']."' ORDER BY numActeAdopt ASC");
$data=$result->fetch();
$numActe=$data['numActeAdopt'];
$annee=substr($data['dateAdopt'], 0,4);
$date=$datetime->getDateMalagasy($data['dateAdopt']);
$officier=set_officier($data['nomOff'],$data['fonction']);
$adoption=adoption_simple(strlen($_GET['list']),$datetime,$data['dateAdopt'],$data['heureAdopt'],$data['nomAdoptant'],$data['profAdoptant'],$data['lieuAdoptant'],$data['dateAdoptant'],$data['adrAdoptant'],$data['pereAdoptant'],$data['vivPere'],$data['mereAdoptant'],$data['vivMere']);
function parent_adopte($array_parent){
	$array=explode(" sy ", $array_parent);
	if ($array[1]==" ") { $array[1]=""; }
	return parent_personne($array[0],$array[1]);
}
function set_temoin($datetime,$database){
	$result=$database->query("SELECT * FROM acteAdoption WHERE numAdopt='".$_GET['numAdopt']."'");
	while ($data=$result->fetch()) {
		$temoin="Ny fanoratana dia natao teo anatrehan'i ".getPersonne($data['nomTem1'],$data['dateTem1'],$data['lieuTem1'],$data["profTem1"],"0").", monina ao ".$data['adrTem1']." sy ".getPersonne($data['nomTem2'],$data['dateTem2'],$data['lieuTem2'],$data["profTem2"],"0").", monina ao ".$data['adrTem2'];
	}
	return $temoin;
}
function set_officier($officier, $fonction){
	$off="Ka rehefa novakiana taminy ity soratra ity dia miara-manao sonia aminay ".$officier.fonction($fonction)." mpiandraikitra sora-piankohonana ao Ambalavao, ny mpanangana sy ny vavolombelona";
	return $off;
}
function adoption_simple($nbr,$datetime,$dateAdopt,$heureAdopt, $nomPere,$profPere,$lieuNaissPere,$dateNaissPere,$adrPere,$pere,$vivPere,$mere,$vivMere){
	$paragraph1="Androany ".$datetime->getStringDate($dateAdopt).", amin'ny ".$datetime->getStringTime($heureAdopt).", no nananganan'i ".getPersonne($nomPere,$dateNaissPere,$lieuNaissPere,$profPere,"0").", monina ao ".the_object($adrPere).", zanak'i ".set_parents_vivant($pere,vivant($vivPere),$mere,vivant($vivMere)).", an'".nombre_enfant("adoption",$nbr);
	return $paragraph1;
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
		<div id="head"> <button id="bouton" onclick="imprimer()">Imprimer</button> <button onclick="document.location='registre_adoption.php'" id="bouton">Retour</button> | 
		Font <select id="font" onchange="changeFont(document.getElementById('font').value)"><option>Commercial Script BT</option>
		     <option>Times New Roman</option></select> </div>
		<div id="etat">
		<div id="contenu">
		   <pre>
		   <span id="maj">
		   <?php
		    if ($data['lieuAdopt']=="tribunal") {
		    	echo "\nREPOBLIKAN'I MADAGASIKARA\t\t\t Lalàna N°61-025 \n$devise\t\t Tamin'ny 09 Oktobra 1961\n \t\t* * * * * * *";
		    }
		    else{
		        echo "\t\t\t\t\t\t\t\t\t       Lalàna N°61-025 \n\t\t\t\t\t\t \t\t\t\t\t Tamin'ny 09 Oktobra 1961\n \t\t\t\t\t\t\t\t\t\t\t\t* * * * * * *";
		    }	
		    ?></span></pre>
		   <p align="center" id="titre">KOPIAN'NY SORA-PIANKOHONANA</p>
				<p id="maj"><span class="tab">_______</span><?php echo "Nalaina tamin'ny bokim-piankonana ao Ambalavao taona: ".$annee.", izao soratra manaraka izao: "; ?></p>
			<div id="act">		   
			<p>
				<span class="tab">_______</span>
				<?php
				if ($data['lieuAdopt']=="tribunal") {
					echo "Araky ny ventin'ny didim-pitsarana tamin'ny ".$datetime->getDateMalagasy($data['dateEcrit']).", ny Fitsarana ambaratonga voalohany ao Fianarantsoa dia mamoaka izao didy manaraka izao: <br/> 
					    <pre>\t\t\t\t''NOHO IREO ANTONY IREO''</pre>
					    <span class='tab'>_______</span> Lazaina fa natsangan'i ".$data["nomAdoptant"]." aram-pitsarana i<br/>";
				}
				else{
					echo $adoption; 
				}
				 ?>
			</p>
				<?php
				$list=$_GET['list'];
				if (strlen($list)>1) {
				    $cpt=1;
				    for ($i=0; $i<strlen($list) ; $i++) {   	
				    	$personne=getPersonne($_SESSION['nomEnfant'.$list[$i]].ifExiste($_SESSION['prenomEnfant'.$list[$i]]," ".$_SESSION['prenomEnfant'.$list[$i]]), $_SESSION['dateNaissEnfant'.$list[$i]], $_SESSION['lieuNaissEnfant'.$list[$i]],$_SESSION['sexeEnfant'.$list[$i]],"0");
				    	if (($i+1)<strlen($list)) {
				    		if ($_SESSION['nomPere'.$list[$i]]." sy ".$_SESSION['nomMere'.$list[$i]]!=$_SESSION['nomPere'.$list[$i+1]]." sy ".$_SESSION['nomMere'.$list[$i+1]]) {
				    			if ($cpt>1) {
				    				echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne." samy zanak'i ".parent_adopte($_SESSION['nomPere'.$list[$i]]." sy ".$_SESSION['nomMere'.$list[$i]])."<br/>";
				    			    $cpt=1;
				    			}
				    			else if($cpt==1){
				    				echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne." zanak'i ".parent_adopte($_SESSION['nomPere'.$list[$i]]." sy ".$_SESSION['nomMere'.$list[$i]])."<br/>";
				    			}
				    		}
				    		else{
				    			echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne."<br/>";
				    			$cpt+=1;
				    		}
				    	} 
				    	else{
				    		if ($cpt>1) {
				    			echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne." samy zanak'i ".parent_adopte($_SESSION['nomPere'.$list[$i]]." sy ".$_SESSION['nomMere'.$list[$i]])."<br/>";
				    		}
				    		else{
				    			echo "<span class='tab'>_______</span><span id='maj'>".($i+1)."-</span>".$personne." zanak'i ".parent_adopte($_SESSION['nomPere'.$list[$i]]." sy ".$_SESSION['nomMere'.$list[$i]])."<br/>";
				    		}
				    	}
				    }
				}
				else{
					$personne=getPersonne($_SESSION['nomEnfant'.$list[0]].ifExiste($_SESSION['prenomEnfant'.$list[0]]," ".$_SESSION['prenomEnfant'.$list[0]]), $_SESSION['dateNaissEnfant'.$list[0]], $_SESSION['lieuNaissEnfant'.$list[0]],$_SESSION['sexeEnfant'.$list[0]],"0");
					echo "<span class='tab'>_______</span>".$personne." zanak'i ".parent_adopte($_SESSION['nomPere'.$list[0]]." sy ".$_SESSION['nomMere'.$list[0]])."<br/>";
				}
				echo "<br/>";
				if ($data['lieuAdopt']=="tribunal") {
					echo "<span class='tab'>_______</span>Ny fanoratana ao amin'ny boky ataonay ".$data["nomOff"].fonction($data["fonction"]).", mpiandraikitra sora-piankohonana ao Ambalavao, androany ".$datetime->getStringDate($data['dateAdopt']);
				}
				else{
					echo "<span class='tab'>_______</span>".set_temoin($datetime,$database);
				    echo "<br/><br/>";
				    echo "<span class='tab'>_______</span>".$officier;
				}
				?>

			</div>	
			<p align="center" id="maj"> SONIA MANARAKA EO AMBANY  </p>
		    <p align="center" id="maj">Kopia manontolo nadika tamin'ny boky androany
		    <?php echo $datetime->getDateFrench(now($database)); ?> </p>
		                <p align="center" id="maj"> NY MPIANDRAIKITRA SORA-PIANKOHONANA  </p>
		</div>
		<div id="aside">
		    <img id="logo_acte" src="image/armoirie.jpg">
		    <p align="center">
		    <span id="commercial">
			Faha: <?php echo $numActe  ?><br/>
			<span class="underline"><?php 
			echo "Fananganana";
			?><br/>
			<?php
			if ($data['lieuAdopt']=="tribunal") {
				echo "Tamin'ny ".$datetime->getDateMalagasy($data["dateEcrit"])."no nanoratana ny didim-pitsarana milaza ny nananganana an'i<br/>";
			}
			echo "</span>";  
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
			<br/>
			<?php echo "<span id='date'>".$date."</span></span>";  ?></span><br/>

		    </p>
	    </div>
	    </div>
	<div id="footer">
		<?php echo str_replace("-","", now())." ".str_replace(":","", temps())." ";
		echo cryptage(strtoupper($_SESSION['nomEnfant'.$list[0]]),strtoupper($_SESSION["nomUser"]));
		echo " ".$_SESSION['pseudo']; ?>
	</div>
	</article>
</body>
</html>