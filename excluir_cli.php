<?php
	 require 'conexao.php';

	if( isset($_GET['id'])&&!empty($_GET['id'])){
		$id=$_GET['id'];
		$sql="DELETE FROM cliente where id_cli=$id";
		$pdo->query($sql);
		header("Location:print_cli.php");

	}
 ?>

      