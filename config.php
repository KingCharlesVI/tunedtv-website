<?php
$dsn = 'mysql:dbname=u297474313_Membership;host=localhost';
$user = 'u297474313_admin';
$password = 'p_]8k?HEw&U/z$,';
 
try
{
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>
