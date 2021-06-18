<link rel="stylesheet" type="text/css" href="font/font.css">
<style type="text/css">
</style>
<?php 
include("cssActe.php");
?>
<p id="hello"></p>
<input type="text" oninput="chg()" id="input" name="">
<script type="text/javascript">
	function chg(){
		document.getElementById("hello").innerHTML=document.getElementById("input").value;
	}
</script>