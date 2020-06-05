<?php
	require 'conexao.php';
	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome=addslashes($_POST['nome']);
		$contacto=addslashes($_POST['numero']);
		$sql="INSERT INTO  funcionario set nome_func='$nome',contacto='$contacto'";
		$pdo->query($sql);
		header("Location:print_fun.php");
	}
 ?>