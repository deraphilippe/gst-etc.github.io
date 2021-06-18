<?php 
$acte=$_GET["acte"];
$table=$_GET["table"];
$database=new PDO("mysql: host=localhost; dbname=etatCivil","root",""); 
$query="SELECT imgActe$acte, typeImg$acte FROM $table WHERE num$acte=:num";
$result=$database->prepare("SELECT imgActe$acte, typeImg$acte FROM $table WHERE num$acte=:num");
$result->execute(
	array('num' => $_GET["num"] ));
$data=$result->fetch();
if (empty($data["imgActe$acte"])) {
	echo "Pas d'image";
}
else{
	header('Content-type: '.$data["typeImg$acte"]);
	echo stripslashes($data["imgActe$acte"]);
}
?>