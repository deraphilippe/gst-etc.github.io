<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="document.location='registre_officier.php'">
<?php
    $database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
	$query=$database->prepare("INSERT INTO registre(codeReg, nomReg, dateReg) VALUES(:codeReg,:nomReg,:dateReg)");
	$query->execute(array(
		'codeReg' => $_POST['nomReg']."-".$_POST['dateReg'],
		'nomReg' => $_POST['nomReg'],
		'dateReg' => $_POST['dateReg']
	)); 
?>
</body>
</html>