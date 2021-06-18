<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="document.location='registre_mariage.php?registre=<?php echo $_POST['codeReg']; ?>'">
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
function m_auto($sexe, $data){
	if ($_POST['codeAuto'.$sexe]!="") {
	    modif_autorisation($data["num".$sexe],$_POST["dateMariage"],$data["dateMariage"],$_POST["codeAuto".$sexe],$_POST["dateAuto".$sexe],$_POST["donAuto".$sexe]);
    }
    else{
	    deleteAutorisation($data["num".$sexe]."-".$_POST["dateMariage"]);
    }
}
function m_sit($sexe, $data){
	if ($_POST['sit'.$sexe]!="") {
	    modif_situation($data["num".$sexe],$_POST["sit".$sexe],$_POST["dateMariage"],$data["dateMariage"]);
    }
    else{
	    deleteSituation($data["num".$sexe]."-".$_POST["dateMariage"]);
    }
}
function m_jug($sexe, $data){
	if ($_POST["numJug".$sexe]!=""){
	    modif_jugement_naissance($data["num".$sexe],$_POST["numJug".$sexe],$_POST["dateJug".$sexe]);
    }
    else{
	    deleteCopieJugement($data["num".$sexe]);
    }
}
include("classe/FormatDateTime.php");
include("classe/fonction_util.php");
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$result=$database->query("SELECT * FROM acteMariage WHERE numMariage='".$_GET['numMariage']."'");
$data=$result->fetch();
modif_personne($database,$data['numHomme'],$_POST['nomHomme'],$_POST['prenomHomme'],$_POST['dateNaissHomme'],$_POST['lieuNaissHomme'],$_POST['profHomme'],$_POST['adrHomme'],'oui',"0");
modif_personne($database,$data['numPereHomme'],$_POST['nomPereHomme'],$_POST['prenomPereHomme'],$_POST['dateNaissPereHomme'],$_POST['lieuNaissPereHomme'],$_POST['profPereHomme'],$_POST['adrPereHomme'],$_POST['vivPereHomme'],"0");
modif_personne($database,$data['numMereHomme'],$_POST['nomMereHomme'],$_POST['prenomMereHomme'],$_POST['dateNaissMereHomme'],$_POST['lieuNaissMereHomme'],$_POST['profMereHomme'],$_POST['adrMereHomme'],$_POST['vivMereHomme'],"0");

modif_personne($database,$data['numFemme'],$_POST['nomFemme'],$_POST['prenomFemme'],$_POST['dateNaissFemme'],$_POST['lieuNaissFemme'],$_POST['profFemme'],$_POST['adrFemme'],'oui',"0");
modif_personne($database,$data['numPereFemme'],$_POST['nomPereFemme'],$_POST['prenomPereFemme'],$_POST['dateNaissPereFemme'],$_POST['lieuNaissPereFemme'],$_POST['profPereFemme'],$_POST['adrPereFemme'],$_POST['vivPereFemme'],"0");
modif_personne($database,$data['numMereFemme'],$_POST['nomMereFemme'],$_POST['prenomMereFemme'],$_POST['dateNaissMereFemme'],$_POST['lieuNaissMereFemme'],$_POST['profMereFemme'],$_POST['adrMereFemme'],$_POST['vivMereFemme'],"0");
modif_personne($database,$data['numTem1'],$_POST['nomTem1'],$_POST['prenomTem1'],$_POST['dateNaissTem1'],$_POST['lieuNaissTem1'],$_POST['profTem1'],$_POST['adrTem1'],"oui","0");
modif_personne($database,$data['numTem2'],$_POST['nomTem2'],$_POST['prenomTem2'],$_POST['dateNaissTem2'],$_POST['lieuNaissTem2'],$_POST['profTem2'],$_POST['adrTem2'],"oui","0");
modif_nationalite($data['numHomme'],$_POST['nationalHomme']);
modif_nationalite($data['numFemme'],$_POST['nationalFemme']);

m_auto('Homme',$data);
m_auto('Femme',$data);

m_sit('Homme',$data);
m_sit('Femme',$data);

m_jug('Homme',$data);
m_jug('Femme',$data);

$split=explode("-", $_POST['codeReg']);
$numMariage=intval($_POST['numActeMariage'])."M".$split[1];
$query=$database->prepare("UPDATE mariage SET numMariage=:numMariage, numActeMariage=:numActeMariage, dateMariage=:dateMariage, heureMariage=:heureMariage, codeReg=:codeReg, numOff=:numOff WHERE numMariage=:numMariageDern");
$query->execute(array(
	'numMariage' => $numMariage,
	'numActeMariage' => intval($_POST['numActeMariage']),
	'dateMariage' => $_POST['dateMariage'],
	'heureMariage' => $_POST['heureMariage'],
	'codeReg' => $_POST['codeReg'],
	'numOff' => officier($_POST['numOff']),
	'numMariageDern' => $_GET['numMariage']
));
if (is_uploaded_file($_FILES['image']['tmp_name'])) {
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$type=$_FILES['image']['type'];
	$query=$database->prepare("UPDATE naissance SET imgActeMar=:imgActeMar, typeImgMar=:typeImgMar WHERE numMariage=:numMariage");
	$query->execute(array(
		'imgActeMar' => $image,
		'typeImgMar' => $type,
		'numMariage' => $numMariage
    ));
}
?>
</body>
</html>