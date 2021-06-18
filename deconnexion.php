<?php
session_start();
include("exportdb.php");
session_destroy();
?>
<script type="text/javascript">
	document.location='login.php';
</script>