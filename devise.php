<?php
$database=new PDO("mysql: host=localhost;dbname=etatCivil","root","");
$result=$database->query("SELECT devise FROM devise");
$devise=$result->fetch()["devise"]; 
?>