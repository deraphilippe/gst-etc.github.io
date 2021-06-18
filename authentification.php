<?php
$session= $_SESSION["modif"];
$user=$_SESSION["nomUser"];
?>
<script type="text/javascript">
	function login(session){
		if (session=="") {
			document.location='login.php';
		}
	}
	login('<?php echo $session; ?>')
</script>