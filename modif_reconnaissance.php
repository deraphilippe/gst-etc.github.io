<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="document.location='registre_reconnaissance.php?registre=<?php echo $_POST['codeReg']; ?>'">
<?php
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
modif_personne($database,$_GET['numPere'],$_POST['nomPere'],$_POST['prenomPere'],$_POST['dateNaissPere'],$_POST['lieuNaissPere'],$_POST['profPere'],$_POST['adrPere'],"oui",$_POST['agePere']);
$split=explode("-", $_POST['codeReg']);
$numRec=intval($_POST['numActeRec'])."N".$split[1];
$query=$database->prepare("UPDATE reconnaissance SET numRec=:numRec, numActeRec=:numActeRec, codeReg=:codeReg, numOff=:numOff, dateRec=:dateRec, heureRec=:heureRec WHERE numRec=:numRecLast");
$query->execute(array(
	'numRec' => $numRec,
	'numActeRec' => intval($_POST['numActeRec']),
	'codeReg' => $_POST['codeReg'],
	'numOff' => officier($_POST['numOff']),
	'dateRec' => $_POST['dateRec'],
	'heureRec' => $_POST['heureRec'],
	'numRecLast' => $_GET['numRec'],
));
$quer=$_GET['numRec'];
$result=$database->query("SELECT * FROM reconnaitre WHERE numRec='".$quer."'");
$i=1;
while ($data=$result->fetch()) {
	$query=$database->prepare("UPDATE reconnaitre SET nomEnfant=:nomEnfant,prenomEnfant=:prenomEnfant,sexeEnfant=:sexeEnfant,dateNaissEnfant=:dateNaissEnfant,lieuNaissEnfant=:lieuNaissEnfant,nomMere=:nomMere,prenomMere=:prenomMere WHERE numRec=:numRec and nomEnfant=:nom and prenomEnfant=:prenom and sexeEnfant=:sexe and dateNaissEnfant=:dates and lieuNaissEnfant=:lieu and nomMere=:nomM and prenomMere=:prenomM");
    $query->execute(array(
	'nomEnfant' => $_POST['nomEnfant'.$i],
	'prenomEnfant' => $_POST['prenomEnfant'.$i],
	'sexeEnfant' => $_POST['sexeEnfant'.$i],
	'dateNaissEnfant' => $_POST['dateNaissEnfant'.$i],
	'lieuNaissEnfant' => $_POST['lieuNaissEnfant'.$i],
	'nomMere' => $_POST['nomMere'.$i],
	'prenomMere' =>  $_POST['prenomMere'.$i],
	'numRec'=>  $numRec,
	'nom'=>$data["nomEnfant"],
	'prenom'=>$data["prenomEnfant"],
	'sexe'=>$data["sexeEnfant"],
	'dates'=>$data["dateNaissEnfant"],
	'lieu'=>$data["lieuNaissEnfant"],
	'nomM'=>$data["nomMere"],
	'prenomM'=>$data["prenomMere"]
    ));
    $i+=1;
}
if (is_uploaded_file($_FILES['image']['tmp_name'])){
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$type=$_FILES['image']['type'];
	$query=$database->prepare("UPDATE reconnaissance SET typeImgRec=:typeImgRec,imgActeRec=:imgActeRec WHERE numRec=:numRec");
    $query->execute(array(
    'typeImgRec'=> $type,
    'imgActeRec'=> $imge,
	'numRec'=>  $numRec
    ));
}
?>
</body>
</html>