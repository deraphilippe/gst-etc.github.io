<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="document.location='registre_adoption.php?registre=<?php echo $_POST['codeReg'];  ?>'">

<?php
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
modif_personne($database,$_GET['numPers'],$_POST['nomPers'],$_POST['prenomPers'],$_POST['dateNaissPers'],$_POST['lieuNaissPers'],$_POST['profPers'],$_POST['adrPers'],"oui","0");
$split=explode("-", $_POST['codeReg']);
$numAdopt=$_POST['numActeAdopt']."A".$split[1];
$num=$_GET['numAdopt'];
$query=$database->query("SELECT numTem1,numTem2 FROM adoption WHERE numAdopt='".$num."'");
$data=$query->fetch();
for ($i=1; $i <3 ; $i++) { 
	modif_personne($database,$data['numTem'.$i],$_POST['nomTem'.$i],$_POST['prenomTem'.$i],$_POST['dateNaissTem'.$i],$_POST['lieuNaissTem'.$i],$_POST['profTem'.$i],$_POST['adrTem'.$i],"oui","0");
}

$query=$database->prepare("UPDATE adoption SET numAdopt=:numAdopt, numActeAdopt=:numActeAdopt,nomPerePers=:nomPerePers, prenomPerePers=:prenomPerePers, vivPere=:vivPere, nomMerePers=:nomMerePers, prenomMerePers=:prenomMerePers, vivMere=:vivMere,  codeReg=:codeReg, numOff=:numOff, dateAdopt=:dateAdopt, heureAdopt=:heureAdopt, lieuAdopt=:lieuAdopt, dateEcrit=:dateEcrit WHERE numAdopt=:numAdoptLast");
$query->execute(array(
	'numAdopt' => $numAdopt,
	'numActeAdopt' => intval($_POST['numActeAdopt']),
	'nomPerePers'=> $_POST['nomPerePers'],
	'prenomPerePers'=> $_POST['prenomPerePers'],
	'vivPere'=> $_POST['vivPere'],
	'nomMerePers'=> $_POST['nomMerePers'],
	'prenomMerePers'=> $_POST['prenomMerePers'],
	'vivMere'=> $_POST['vivMere'],
	'codeReg' => $_POST['codeReg'],
	'numOff' => officier($_POST['numOff']),
	'dateAdopt' => $_POST['dateAdopt'],
	'lieuAdopt' => $_POST['lieuAdopt'],
	'dateEcrit' => $_POST['dateEcrit'],
	'heureAdopt' => $_POST['heureAdopt'],
	'numAdoptLast'=> $_GET['numAdopt']
));
$result=$database->query("SELECT * FROM adopter WHERE numAdopt='".$numAdopt."'");
$i=1;
while ($data=$result->fetch()) {
	$query=$database->prepare("UPDATE adopter SET nomEnfant=:nomEnfant,prenomEnfant=:prenomEnfant,sexeEnfant=:sexeEnfant,dateNaissEnfant=:dateNaissEnfant,lieuNaissEnfant=:lieuNaissEnfant,nomMere=:nomMere,prenomMere=:prenomMere,nomPere=:nomPere,prenomPere=:prenomPere WHERE numAdopt=:numAdopt and nomEnfant=:nom and prenomEnfant=:prenom and sexeEnfant=:sexe and dateNaissEnfant=:dates and lieuNaissEnfant=:lieu and nomMere=:nomM and prenomMere=:prenomM and nomPere=:nomP and prenomPere=:prenomP");
    $query->execute(array(
	'nomEnfant' => $_POST['nomEnfant'.$i],
	'prenomEnfant' => $_POST['prenomEnfant'.$i],
	'sexeEnfant' => $_POST['sexeEnfant'.$i],
	'dateNaissEnfant' => $_POST['dateNaissEnfant'.$i],
	'lieuNaissEnfant' => $_POST['lieuNaissEnfant'.$i],
	'nomMere' => $_POST['nomMere'.$i],
	'prenomMere' =>  $_POST['prenomMere'.$i],
	'nomPere' => $_POST['nomPere'.$i],
	'prenomPere' =>  $_POST['prenomPere'.$i],
	'numAdopt'=>  $numAdopt,
	'nom'=>$data["nomEnfant"],
	'prenom'=>$data["prenomEnfant"],
	'sexe'=>$data["sexeEnfant"],
	'dates'=>$data["dateNaissEnfant"],
	'lieu'=>$data["lieuNaissEnfant"],
	'nomM'=>$data["nomMere"],
	'prenomM'=>$data["prenomMere"],
	'nomP'=>$data["nomPere"],
	'prenomP'=>$data["prenomPere"]
    ));
    $i+=1;
}
if (is_uploaded_file($_FILES['image']['tmp_name'])){
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$type=$_FILES['image']['type'];
	$query=$database->prepare("UPDATE adoption SET typeImgAdopt=:typeImgAdopt,imgActeAdopt=:imgActeAdopt WHERE numAdopt=:numAdopt");
    $query->execute(array(
    'typeImgAdopt'=> $type,
    'imgActeAdopt'=> $imge,
	'numAdopt'=>  $numRec
    ));
}
?>
</body>
</html>