<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="document.location='registre_deces.php?registre=<?php echo $_POST['codeReg'];  ?>'">
<?php
include("classe/FormatDatetime.php");
include("classe/fonction_util.php");
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$numDec="";
if ($_POST['typeDec']=='declaration') {
	$result=$database->query("SELECT numPers as numDec FROM declarerDeces WHERE numDeces='".$_GET['numDeces']."'");
	$data=$result->fetch();
	$numDec=$data['numDec'];
}
$split=explode("-", $_POST['codeReg']);
$numDeces=intval($_POST['numActeDeces'])."D".$split[1];
$query=$database->prepare("UPDATE deces SET numDeces=:numDeces,numActeDeces=:numActeDeces,nomDeces=:nomDeces,prenomDeces=:prenomDeces,dateDeces=:dateDeces,heureDeces=:heureDeces,lieuDeces=:lieuDeces,profDeces=:profDeces,adrDeces=:adrDeces,sexeDecedes=:sexeDecedes,dateNaissDeces=:dateNaissDeces,lieuNaissDeces=:lieuNaissDeces,nomMere=:nomMere,prenomMere=:prenomMere,vivantMere=:vivantMere,nomPere=:nomPere,prenomPere=:prenomPere,vivantPere=:vivantPere,numOff=:numOff,codeReg=:codeReg,typeDec=:typeDec, adrPere=:adrPere, profPere=:profPere, adrMere=:adrMere, profMere=:profMere WHERE numDeces=:lastNum");
$query->execute(array(
	'numDeces' => $numDeces,
	'numActeDeces' => intval($_POST['numActeDeces']),
	'nomDeces' => $_POST['nomDeces'],
	'prenomDeces' => $_POST['prenomDeces'],
	'dateDeces' => $_POST['dateDeces'],
	'heureDeces' => $_POST['heureDeces'],
	'lieuDeces' => $_POST['lieuDeces'],
	'profDeces' => $_POST['profDeces'],
	'adrDeces' => $_POST['adrDeces'],
	'sexeDecedes' => $_POST['sexeDecedes'], 
	'dateNaissDeces' => $_POST['dateNaissDeces'],
	'lieuNaissDeces' => $_POST['lieuNaissDeces'],
	'nomMere' => $_POST['nomMere'],
	'prenomMere' => $_POST['prenomMere'],
	'vivantMere' => $_POST['vivantMere'],
	'nomPere' => $_POST['nomPere'],
	'prenomPere' => $_POST['prenomPere'],
	'vivantPere' => $_POST['vivantPere'],
	'numOff' => officier($_POST['numOff']),
	'codeReg' => $_POST['codeReg'],
	'typeDec'=>$_POST['typeDec'],
	'adrPere'=>$_POST['adrPere'],
	'profPere'=>$_POST['profPere'],
	'adrMere'=>$_POST['adrMere'],
	'profMere'=>$_POST['profMere'],
	'lastNum'=>$_GET['numDeces']
));
if ($_POST["typeDec"]=="declaration") {
	modif_personne($database,$numDec,$_POST['nomDec'],$_POST['prenomDec'],$_POST['dateNaissDec'],$_POST['lieuNaissDec'],$_POST['profDec'],$_POST['adrDec'],'oui','0');
	$query=$database->prepare("UPDATE declarerDeces SET numDeces=:numDeces, declarant=:declarant, dateDecDeces=:dateDecDeces, heureDecDeces=:heureDecDeces WHERE numDeces=:numDecesDern");
	$query->execute(array(
		'numDeces' => $numDeces,
		'declarant' => $_POST['declarant'],
		'dateDecDeces' => $_POST['dateDecDeces'],
		'heureDecDeces' => $_POST['heureDecDeces'],
		'numDecesDern' => $numDeces
	));
}
else{
	modif_jugement($database, $_POST['numJugement'], $_POST['dateJugement'],"0000-00-00" ,$_POST['dateEnregistre']);
}
if (is_uploaded_file($_FILES['image']['tmp_name'])) {
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$type=$_FILES['image']['type'];
	$query=$database->prepare("UPDATE deces SET imgActeDec=:imgActeDec, typeImgDec=:typeImgDec WHERE numDeces=:numDeces");
	$query->execute(array(
		'imgActeDec' => $image,
		'typeImgDec' => $type,
		'numDeces' => $numDeces
    ));
}
?>
</body>
</html>