<?php
    $database=new PDO("mysql: host=localhost","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	try{
		$result=$database->query("create database etatcivil");
		$database->query("use etatcivil");
	    $split=explode("\n", file_get_contents("backup/database.sql"));
	    $cmd="";
	    foreach($split as $key) {
	        if (substr($key,0,2)!="--") {
			    $cmd.=$key;
		    }
		    if (substr(trim($key),-1,1)==";") {
			    $database->query($cmd);
			    $cmd="";
			}
	    }
	    echo "<script> document.location='login.php' </script>";
	} catch (Exception $e) {
		echo "<script> document.location='login.php' </script>";
	}	

?>