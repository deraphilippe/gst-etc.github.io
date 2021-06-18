<?php 
 include_once(dirname(__FILE__) . '/mysqldump/src/Ifsnop/Mysqldump/Mysqldump.php');
$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=etatcivil', 'root', '');
$dump->start('backup/database.sql');
?>
