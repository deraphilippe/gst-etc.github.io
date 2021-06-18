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
$numPere=getNumPersonne($database,$_POST['nomPere'],$_POST['prenomPere'],$_POST['dateNaissPere'],$_POST['lieuNaissPere'],$_POST['profPere'],$_POST['adrPere'],"oui",$_POST['agePere']);
if (!is_uploaded_file($_FILES['image']['tmp_name'])) {
	$image=null;
	$type="";
}
else{
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$type=$_FILES['image']['type'];
}
$split=explode("-", $_POST['codeReg']);
$numRec=intval($_POST['numActeRec'])."N".$split[1];
$query=$database->prepare("INSERT INTO reconnaissance( numRec, numActeRec, codeReg, numOff, dateRec, heureRec, imgActeRec, typeImgRec) VALUES(:numRec,:numActeRec,:codeReg,:numOff,:dateRec,:heureRec,:imgActeRec,:typeImgRec)");
$query->execute(array(
	'numRec' => $numRec,
	'numActeRec' => intval($_POST['numActeRec']),
	'codeReg' => $_POST['codeReg'],
	'numOff' => officier($_POST['numOff']),
	'dateRec' => $_POST['dateRec'],
	'heureRec' => $_POST['heureRec'],
	'imgActeRec' =>$image,
	'typeImgRec'=>$type
));
for ($i=1; $i <$_GET["nbr"]+1 ; $i++) {
    if ($_POST['mere']=="meme") {
    	$nomMere=$_POST['nomMere1'];
    	$prenomMere=$_POST['prenomMere1'];
    } 
    else{
    	$nomMere=$_POST['nomMere'.$i];
    	$prenomMere=$_POST['prenomMere'.$i];
    }
	$query=$database->prepare("INSERT INTO reconnaitre(numRec,numPere,nomEnfant,prenomEnfant,sexeEnfant,dateNaissEnfant,lieuNaissEnfant,nomMere,prenomMere) VALUES(:numRec,:numPere,:nomEnfant,:prenomEnfant,:sexeEnfant,:dateNaissEnfant,:lieuNaissEnfant,:nomMere,:prenomMere)");
    $query->execute(array(
	'numRec' => $numRec,
	'numPere' => $numPere,
	'nomEnfant' => $_POST['nomEnfant'.$i],
	'prenomEnfant' => $_POST['prenomEnfant'.$i],
	'sexeEnfant' => $_POST['sexeEnfant'.$i],
	'dateNaissEnfant' => $_POST['dateNaissEnfant'.$i],
	'lieuNaissEnfant' => $_POST['lieuNaissEnfant'.$i],
	'nomMere' => $nomMere,
	'prenomMere' => $prenomMere,
));
}
?>
</body>
</html>