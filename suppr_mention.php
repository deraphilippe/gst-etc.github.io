<?php  
$db=new PDO("mysql: host=localhost;dbname=etatcivil","root","");
$query=$db->prepare("DELETE FROM mentionmarginal WHERE numMention=:numMention and numNaiss=:numNaiss");
$query->execute(array(
	'numMention' => $_GET['numMention'],
	'numNaiss' => $_GET['numNaiss'] 
));
echo "<script> document.location='mention.php?numNaiss=".$_GET['numNaiss'] ."'</script>";
?>