<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="document.location='registre_naissance.php?registre=<?php echo $_POST['codeReg']; ?>'">
	<form id="form0">
		<input type="hidden" type="type" value="<?php echo $_POST['typeNaiss'] ?>">
	</form>
<?php
function registre($origine){
	$str="";
	if ($origine=="Fianarantsoa") {
		$str="N";
	}
	else{
		$str="J";
	}
	return $str;
}
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$numOff=$_POST["numOff"][0];
$numPere=getNumPersonne($database,$_POST['nomPere'],$_POST['prenomPere'],$_POST['dateNaissPere'],$_POST['lieuNaissPere'],$_POST['profPere'],$_POST['adrPere'],$_POST['vivPere'],$_POST['agePere']);
$numMere=getNumPersonne($database,$_POST['nomMere'],$_POST['prenomMere'],$_POST['dateNaissMere'],$_POST['lieuNaissMere'],$_POST['profMere'],$_POST['adrMere'],$_POST['vivMere'],$_POST['ageMere']);
if ($_POST["typeNaiss"]=="declaration") {
    $legitime=$_POST["legitime"];
}
else{
	$legitime="oui";
}
if (!is_uploaded_file($_FILES['image']['tmp_name'])) {
	$image="";
	$type="";
}
else{
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$type=$_FILES['image']['type'];
}
$split=explode("-", $_POST['codeReg']);
$numNaiss=intval($_POST['numActeNaiss']).$_POST['codeReg'][0].$split[1];
$query=$database->prepare("INSERT INTO naissance(numNaiss,numActeNaiss,legitime,typeNaiss,nomEnfant,prenomEnfant,sexeEnfant,dateNaissEnfant,heureNaissEnfant,lieuNaissEnfant,codeReg,numPere,numMere,numOff,imgActeNaiss,typeImgNaiss,jumeau) VALUES(:numNaiss,:numActeNaiss,:legitime,:typeNaiss,:nomEnfant,:prenomEnfant,:sexeEnfant,:dateNaissEnfant,:heureNaissEnfant,:lieuNaissEnfant,:codeReg,:numPere,:numMere,:numOff,:imgActeNaiss,:typeImgNaiss,:jumeau)");
$query->execute(array(
	'numNaiss' => $numNaiss,
	'numActeNaiss' => intval($_POST['numActeNaiss']),
	'legitime' => $legitime,
	'typeNaiss' => $_POST['typeNaiss'],
	'nomEnfant' => $_POST['nomEnfant'],
	'prenomEnfant' => $_POST['prenomEnfant'],
	'sexeEnfant' => $_POST['sexeEnfant'], 
	'dateNaissEnfant' => $_POST['dateNaissEnfant'],
	'heureNaissEnfant' => $_POST['heureNaissEnfant'],
	'lieuNaissEnfant' => $_POST['lieuNaissEnfant'],
	'codeReg' => $_POST['codeReg'],
	'numPere' => $numPere,
	'numMere' => $numMere,
	'numOff' => officier($_POST['numOff']),
	'imgActeNaiss' =>$image,
	'typeImgNaiss'=>$type,
	'jumeau'=>$type
));
if ($_POST["typeNaiss"]=="declaration") {
	if ($_POST["declarantChecked"]=="pere") {
		$numDec=$numPere;
	}
	else{
		$numDec=getNumPersonne($database,$_POST['nomDec'],$_POST['prenomDec'],$_POST['dateNaissDec'],$_POST['lieuNaissDec'],$_POST['profDec'],$_POST['adrDec'],"oui","0");
	}
	$query=$database->prepare("INSERT INTO declarerNaiss(numNaiss,numPers,declarant,dateDecNaiss,heureDecNaiss,present) VALUES(:numNaiss,:numPers,:declarant,:dateDecNaiss,:heureDecNaiss,:present)");
	$query->execute(array(
		'numNaiss' => $numNaiss,
		'numPers' => $numDec,
		'declarant' => $_POST['declarant'],
		'dateDecNaiss' => $_POST['dateDecNaiss'],
		'heureDecNaiss' => $_POST['heureDecNaiss'],
		'present' => $_POST['present']
	));
}
else{
	ajoutJugement($_POST['numJugement'], $_POST['dateJugement'],$_POST['dateReception'] ,$_POST['dateEnregistre'],"Fahaterahana",$_POST['origineJugement']);
	$query=$database->prepare("INSERT INTO enoncerJugement(numJugement,numNaiss) VALUES(:numJugement,:numNaiss)");
	$query->execute(array(
		'numNaiss' => $numNaiss,
		'numJugement' => $_POST['numJugement']
    ));
}
?>
</body>
</html>