<?php
session_start();
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$query=$database->prepare("SELECT modif,pseudo,nomUser FROM user WHERE nomUser=:nomUser AND password=:password");
$droit="";
$query->execute(array(
	'nomUser' => $_POST["user"],
	'password' => $_POST["pwd"]
	 ));
while ($data=$query->fetch()) {
	$_SESSION["modif"]=$data["modif"];
	$droit=$data["modif"];
	$_SESSION["nomUser"]=$data["nomUser"];
	$_SESSION["pseudo"]=$data["pseudo"];
}
?>
<script type="text/javascript">
	function redirect(droit){
		if (droit!="") {
			document.location="registre_naissance.php";
		}
		else{
			document.location="login.php?error=1";
		}
	}
	redirect('<?php echo $droit; ?>')
</script>