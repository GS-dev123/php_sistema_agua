<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pagina Inicial de Sistema gestao de agua</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <?php
          require'conexao.php';
      ?>
    <div class="container">
    	<a href="insert_func.php">Adiocionar Funcionario</a>
    	<table class="table">
    		<thead>
    			<tr>
    				<th>Codigo</th>
    				<th>Nome</th>
    				<th>Contacto</th>
    				<th>Acções</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
    				$sql="SELECT *FROM funcionario";
    				$sql=$pdo->query($sql);
    				if ($sql->rowCount()>0) {
    				 	foreach ($sql->fetchall() as $funcionario ) {
    				 		echo '<tr>';
    				 		echo '<td>'.$funcionario['id_func'].'</td>';
    				 		echo '<td>'.$funcionario['nome_func'].'</td>';
    				 		echo '<td>'.$funcionario['contacto'].'</td>';
    				 		echo '<td><a href="excluir_func.php?id='.$funcionario['id_func'].'">Excluir</a>-<a href="formedi_func.php?id='.$funcionario['id_func'].'">Editar</a></td>';
    				 		echo '</tr>';
    				 	}
  
    				 } 
    			 ?>
    			
    		</tbody>
    		
    	</table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>