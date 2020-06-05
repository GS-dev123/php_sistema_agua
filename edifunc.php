<?php
	require 'conexao.php';
	$id=0;
	if (isset($_GET['id']) && !empty($_GET['id'])) {
	 	$id=addslashes($_GET['id']);
	 } 

	 $sql="SELECT *FROM funcionario where id_func=$id;";
	 $sql=$pdo->query($sql);
	 if ($sql->rowCount()>0) {
	 	$func=$sql->fetch();

	 }else{
	 	header("Location:print_fun.php");
	 }

	 if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	 	$nome=addslashes($_POST['nome']);
		$contacto=addslashes($_POST['numero']);
		$sql="UPDATE funcionario set nome_func='$nome',contacto='$contacto' where id_func=$id";
		$pdo->query($sql);
		header("Location:print_fun.php");
	 }

 ?>