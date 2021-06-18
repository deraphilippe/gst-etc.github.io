<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="document.location='registre_naissance.php?registre=<?php echo $_POST['codeReg']; ?>'">
<?php
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$result=$database->query("SELECT numPere, numMere FROM naissance WHERE numNaiss=".$_GET['numNaiss']);
$data=$result->fetch();
$numPere=$data["numPere"];
$numMere=$data["numMere"];
$numDec="";
if ($_POST['typeNaiss']=='declaration') {
	$result=$database->query("SELECT numPers as numDec FROM declarerNaiss WHERE numNaiss=".$_GET['numNaiss']);
	$data=$result->fetch();
	$numDec=$data['numDec'];
}
$numPere=modif_personne($database,$numPere,$_POST['nomPere'],$_POST['prenomPere'],$_POST['dateNaissPere'],$_POST['lieuNaissPere'],$_POST['profPere'],$_POST['adrPere'],$_POST['vivPere'],$_POST['agePere']);
modif_personne($database,$numMere,$_POST['nomMere'],$_POST['prenomMere'],$_POST['dateNaissMere'],$_POST['lieuNaissMere'],$_POST['profMere'],$_POST['adrMere'],$_POST['vivMere'],$_POST['ageMere']);
if ($_POST["typeNaiss"]=="declaration") {
    $legitime=$_POST["legitime"];
}
else{
	$legitime="oui";
}
$split=explode("-", $_POST['codeReg']);
$numNaiss=intval($_POST['numActeNaiss']).$_POST['codeReg'][0].$split[1];
$res=$database->prepare("UPDATE naissance SET numPere=:numPere WHERE numNaiss=:numNaiss");
$res->execute(array('numPere' => $numPere, 'numNaiss' => $numNaiss));
$query=$database->prepare("UPDATE naissance SET numNaiss=:numNaiss, numActeNaiss=:numActeNaiss, legitime=:legitime, typeNaiss=:typeNaiss, nomEnfant=:nomEnfant, prenomEnfant=:prenomEnfant, sexeEnfant=:sexeEnfant, dateNaissEnfant=:dateNaissEnfant, heureNaissEnfant=:heureNaissEnfant, lieuNaissEnfant=:lieuNaissEnfant, codeReg=:codeReg, numOff=:numOff, jumeau=:jumeau WHERE numNaiss=".$_GET['numNaiss']);
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
	'numOff' =>officier($_POST['numOff']),
	'jumeau' => $_POST['jumeau']
));
if ($_POST["typeNaiss"]=="declaration") {
	if ($_POST["declarant"]!="Rain-jaza") {
		modif_personne($database,$numDec,$_POST['nomDec'],$_POST['prenomDec'],$_POST['dateNaissDec'],$_POST['lieuNaissDec'],$_POST['profDec'],$_POST['adrDec'],'oui',$_POST['ageDec']);
	}
	$query=$database->prepare("UPDATE declarerNaiss SET numNaiss=:numNaiss, declarant=:declarant, dateDecNaiss=:dateDecNaiss, heureDecNaiss=:heureDecNaiss, present=:present WHERE numNaiss=:numNaissDern");
	$query->execute(array(
		'numNaiss' => $numNaiss,
		'declarant' => $_POST['declarant'],
		'dateDecNaiss' => $_POST['dateDecNaiss'],
		'heureDecNaiss' => $_POST['heureDecNaiss'],
		'present' => $_POST['present'],
		'numNaissDern' => $numNaiss
	));
}
else if ($_POST["typeNaiss"]=="jugement"){
	$result1=$database->query("SELECT numJugement FROM enoncerJugement WHERE numNaiss=".$_GET['numNaiss']);
	modif_jugement($result1->fetch()['numJugement'],$_POST['numJugement'], $_POST['dateJugement'],$_POST['dateReception'] ,$_POST['dateEnregistre']);
	$nonQuery=$database->prepare("UPDATE jugement SET origineJugement=:origineJugement WHERE numJugement=:numJugement");
	$nonQuery->execute(array(
		'origineJugement' => $_POST['origineJugement'],
		'numJugement' =>$_POST['numJugement']
	));
}
if (is_uploaded_file($_FILES['image']['tmp_name'])) {
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$type=$_FILES['image']['type'];
	$query=$database->prepare("UPDATE naissance SET imgActeNaiss=:imgActeNaiss, typeImgNaiss=:typeImgNaiss WHERE numNaiss=:numNaiss");
	$query->execute(array(
		'imgActeNaiss' => $image,
		'typeImgNaiss' => $type,
		'numNaiss' => $numNaiss
    ));
}
?>
</body>
</html>