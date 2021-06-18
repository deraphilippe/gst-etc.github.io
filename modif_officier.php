<?php
include("classe/FormatDatetime.php"); 
include("classe/fonction_util.php");  
$result=$database->prepare("UPDATE officier set nomOff=:nomOff, prenomOff=:prenomOff, fonction=:fonction WHERE numOff=:numOff");
$result->execute(array(
	'nomOff' => $_POST['nomOff'],
	'prenomOff'  => $_POST['prenomOff'],
	'fonction' => $_POST['fonction'],
	'numOff' => $_POST['numOff']
));
echo "<script> document.location='registre_officier.php'</script>"; 
?>
