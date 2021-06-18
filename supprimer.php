<?php
$database=new PDO("mysql: host=localhost; dbname=etatCivil","root",""); 
if (isset($_GET['numOff'])) {
	$numOff=$_GET['numOff'];
	$database->query("DELETE FROM officier WHERE numOff=".$numOff);
} 
if (isset($_GET['codeReg'])) {
	$codeReg=$_GET['codeReg'];
	$database->query("DELETE FROM registre WHERE codeReg='".$codeReg."'");
}
echo "<script>
     document.location='registre_officier.php'
	</script>";
?>
