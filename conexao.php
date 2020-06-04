<?php

$dns="mysql:dbname=s_g_agua;host=localhost";
$user="root";
$password="";

try {
	$pdo=new PDO($dns,$user,$password);
} catch (Exception $e) {
	echo "erro de conexão: ".$e->getMessage();
	
}

?>

