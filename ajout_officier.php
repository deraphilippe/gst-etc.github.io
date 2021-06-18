<?php
    $database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
    $result=$database->prepare("SELECT * FROM officier where nomOff=:nomOff and prenomOff=:prenomOff and fonction=:fonction");
    $result->execute(array(
		'nomOff' => $_POST['nomOff'],
		'prenomOff' => $_POST['prenomOff'],
		'fonction' => $_POST['fonction']
	));
	$numOff="";
	while ($data=$result->fetch()) {
		$numOff=$data["numOff"];
	}
    if ($numOff=="") {
    	$query=$database->prepare("INSERT INTO officier(numOff, nomOff, prenomOff, fonction) VALUES(0,:nomOff, :prenomOff, :fonction)");
	    $query->execute(array(
		'nomOff' => $_POST['nomOff'],
		'prenomOff' => $_POST['prenomOff'],
		'fonction' => $_POST['fonction']
	    ));
	}
	else{
		echo "<script> alert('Cet officier a été déjà enregistré auparavant') </script>";
    }
    echo "<script> document.location='registre_officier.php' </script>";  
?>