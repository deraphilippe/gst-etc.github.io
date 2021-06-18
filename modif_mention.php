<?php  
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$nonQuery=$database->prepare("UPDATE mentionMarginal SET mention=:mention WHERE numMention=:numMention");
$nonQuery->execute(array(
	'mention' =>$_POST["mention"] ,
	'numMention' =>$_POST["numMention"]
));

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="document.location='mention.php?numNaiss='+document.getElementById('retour').value">
	<input type="hidden" id="retour" value="<?php echo $_POST['numNaiss'] ?>">
</body>
</html>