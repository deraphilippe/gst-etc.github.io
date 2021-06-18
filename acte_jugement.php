<?php 
session_start();
require("cssActe.php");
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
require("devise.php");
$datetime=new FormatDatetime();
$datetime->completeTimeTab();
$database=new PDO("mysql: host=localhost; dbname=etatCivil","root","");
$query="SELECT a.*, d.*, p.* from acteNaissance a, declarerNaiss d, personne p WHERE a.numNaiss=d.numNaiss and d.numPers=p.numPers and a.numNaiss=".$_GET["numNaiss"];
$result=$database->prepare("SELECT a.*, j.* FROM acteNaissance a, enoncerJugement e, jugement j WHERE e.numNaiss=:numNaiss and j.numJugement=e.numJugement and a.numNaiss=e.numNaiss");
$result->execute(array('numNaiss' => $_GET['numNaiss']));
while ($data=$result->fetch()) {
	$annee=substr($data['dateJugement'], 0,4);
	$numActe=$data['numActeNaiss'];
	$date=$datetime->getDateMalagasy($data['dateJugement']);
	$nom=$data['nomEnfant'];
	$prenom=$data['prenomEnfant'];
	$dateNaiss=$data['dateNaissEnfant'];
	$paragraph1=paragraph1($data['origineJugement'],$datetime, $data['numJugement'],$data['dateJugement'],$data['dateReception']);
	$paragraph2=paragraph2($data['typeNaiss'], $datetime, $data['dateNaissEnfant'], $data['lieuNaissEnfant'], $data['nomEnfant'], $data['prenomEnfant'],$data['sexeEnfant'], $data['nomMere'],$data['ageMere'],$data['vivMere'], $data['adrMere'], $data['nomPere'],$data['agePere'],$data['vivPere'], $data['adrPere']);
	$paragraph3=paragraph3($datetime,$data['nomOff'],$data['fonction'],$data['dateEnregistre']);
}
function set_parent($nom, $age){
	$str="";
	if ($nom!=""){
		$str=the_object($nom).set_age($age);
	}
	return $str;
}
function dateJugement($date){
	global $datetime;
	if (substr($date, 4)=='-00-00') {
		return "taona ".substr($date, 0,4);
	}
	else{
		return $datetime->getDateMalagasy($date);
	}
}
function parents_ensemble($pere,$vivPere,$domPere,$mere,$vivMere,$domMere){
	$str="";
	if ($pere!="") {
		if ($domPere!=$domMere) {
			$str=the_object($pere).vivant($vivPere).ifExiste($domPere," monina ao ".the_object($domPere))." sy ".$mere.vivant($vivMere).ifExiste($domMere," monina ao ".the_object($domMere));
		}
		else if($domPere==$domMere && $domPere!=""){
			$str=the_object($pere).vivant($vivPere)." sy ".$mere.vivant($vivMere).ifExiste($domMere," monina ao ".the_object($domMere));
		}
	}
	else{
		$str=the_object($mere).vivant($vivMere).ifExiste($domMere,", monina ao ".the_object($domMere));
	}
	return $str;
}
function paragraph1($origine, $datetime, $numJug, $dateJug, $dateRecep){
	$paragraph1="";
	$paragraph1="Araka ny ventin'ny didim-pitsarana laharana faha ".the_object($numJug)." tamin'ny ".$datetime->getDateMalagasy($dateJug)." navoakan'ny fitsarana ".$origine;
	if ($dateRecep!="0000-00-00") {
		$paragraph1.=", voarainay androany ".$datetime->getDateMalagasy($dateRecep);
	}
	return $paragraph1."<span id='mitet'>, mitety vohitra ao Ambalavao</span>";
}
function paragraph2($type, $datetime, $date, $lieu, $nom, $prenom,$sexe, $nomMere, $ageMere,$vivMere, $adrMere, $nomPere, $agePere,$vivPere, $adrPere){
	$paragraph2="";
	if ($type="jugement") {
		$paragraph2="Dia ambaranay fa teraka tamin'ny ".dateJugement($date).", tao ".the_object($lieu).", ".the_object($nom." ".$prenom).", ".$sexe.", zanak'i ".parents_ensemble(set_parent($nomPere,$agePere),$vivPere,$adrPere,set_parent($nomMere,$ageMere),$vivMere,$adrMere);
	}
	return $paragraph2;
}
function paragraph3($datetime,$nomOff,$fonction,$date){
	$paragraph3="Fandikana ao amin'ny boky ataonay ".$nomOff.", ".ifExiste($fonction,$fonction.", ")." mpiandraikitra sora-piankohonana ao Ambalavao, androany ".$datetime->getDateFrench($date).".";
	return $paragraph3;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="font/font.css">
	<script type="text/javascript" src="impression.js"></script>
</head>
<body>
	<article>
		<div id="head"> <button id="bouton" onclick="imprimer()">Imprimer</button> <button onclick="document.location='registre_naissance.php'" id="bouton">Retour</button> | 
		Font <select id="font" onchange="changeFont(document.getElementById('font').value)"><option>Commercial Script BT</option>
		     <option>Times New Roman</option></select><input type="radio" name="mt" onclick="mitety()">Mitety <input type="radio" name="mt" onclick="tsy_mitety()" checked>non</div>
		<div id="etat">
		<div id="contenu">
			<div id="act">
		   <pre id="maj"><?php echo "REPOBLIKAN'I MADAGASIKARA \t\t\t\t\t\t Lalàna N°61-025\n$devise\t\t\t\t\tTamin'ny 09 Oktobra 1961\n \t\t\t********"?></pre>
		   <pre><span id="titre"><?php  echo "\t\t\t\t\tKOPIAN'NY SORA-PIANKOHONANA" ?> </span></pre><br/>
				<span class="tab">_______</span><?php echo "Nalaina tamin'ny bokim-piankonana ao Ambalavao taona: ".$annee.", izao soratra manaraka izao "; ?>		   
			<p>
				<span class="tab">_______</span><?php echo $paragraph1; ?>
			</p>
			<pre id="times"><?php echo "\t\t\t\t\t\t''NOHO IREO ANTONY IREO''"?> </pre>
			<p>
				<span class="tab">_______</span><?php echo $paragraph2; ?>
			</p>
			<p>
				<span class="tab">_______</span><?php echo $paragraph3; ?>
			</p>
			<p id="maj" align="center"> SONIA MANARAKA EO AMBANY <br/><br/>
			<?php mention($database,$_GET['numNaiss']); ?>
		    Kopia manontolo nadika tamin'ny boky androany <?php echo $datetime->getDateFrench(now()); ?><br/><br/>
		          NY MPIANDRAIKITRA SORA-PIANKOHONANA  
		    </p>
		</div>
		</div>
		<div id="aside">
		    <img id="logo_acte" src="image/armoirie.jpg">
		    <p align="center">
			<span id='commercial'>Faha: <?php echo $numActe  ?><br/>
			<?php echo $date  ?><br/>
			<?php echo "No nanoratana ny didim-pitsarana milaza nahaterahan'i"  ?><br/><br/>
			<?php echo ctrlSTR($nom);  ?><br/>
			<?php echo the_object($prenom);  ?><br/><br/>
			<span id='date'>
				<?php echo "Teraka tamin'ny";  ?></span><br/><?php echo dateJugement($dateNaiss); ?><br/>

		    </p>
	    </div>
	    </div>
	    <div id="footer">
		<?php echo str_replace("-","", now())." ".str_replace(":","", temps())." ".cryptage(strtoupper($nom),strtoupper($_SESSION["nomUser"])); 
		    echo " ".$_SESSION['pseudo']; ?>
	    </div>
	</article>
</body>
<script type="text/javascript">
	function mitety(){
		document.getElementById("mitet").style.visibility="visible";
	}
	function tsy_mitety(){
		document.getElementById("mitet").style.visibility="hidden";
	}
	document.getElementById("mitet").style.visibility="hidden";
</script>
</html>