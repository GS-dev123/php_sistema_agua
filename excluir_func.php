<?php
	require 'conexao.php';
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$id=addslashes($_GET['id']);
		$sql="DELETE FROM funcionario where id_func=$id";
		$pdo->query($sql);
		header("Location:print_fun.php");
	 } 
 ?>