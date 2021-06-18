<?php
$response="success";
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$nonQuery=$database->prepare("UPDATE user SET password=:newpassword WHERE nomUser=:nomUser AND password=:oldpassword");
$nonQuery->execute(array(
	'newpassword' =>$_POST["newPwd"],
	'nomUser' =>$_POST["nomUser"],
	'oldpassword' =>$_POST["oldPwd"]
)); 
$result=$database->prepare("SELECT password FROM user WHERE nomUser=:nomUser");
$result->execute(array(
	'nomUser' =>$_POST["nomUser"]
)); 
$pwd=$result->fetch()["password"];
if ($_POST["newPwd"]!=$pwd) {
	$response="error";
}
?>
<script type="text/javascript">
	document.location="login.php?response=<?php echo $response ?>";
</script>