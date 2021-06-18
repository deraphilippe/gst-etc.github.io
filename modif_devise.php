<?php
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$nonQuery=$database->prepare("UPDATE devise SET devise=:devise WHERE numDev=1");
$nonQuery->execute(array(
	'devise' =>$_POST["devise"]
)); 
?>
<script type="text/javascript">
	document.location="registre_officier.php";
</script>