 <!DOCTYPE html>
<html lang="pt-br">
  <head>

  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inserção do Cliente</title>

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
  <body >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="http://localhost/rcliente.php">
            <div class="form-group">
               <label for="txnome">Nome do cliente</label>
               <input type="text" name="nome" class="form-control" id="txnome">
               <label for="txbi">BI</label>
               <input type="text" name="bi" id="txbi" class="form-control">
               <label for="txcasa"> Numero da casa</label>
               <input type="number" name="ncasa"  id="txcasa" class="form-control">
               <label for="txqt">Quarteirão</label>
               <input type="number" name="quarteirao" id="txqt" class="form-control">
               <label for="txcontacto">Contacto</label>
               <input type="number" name="contacto" id="txcontacto" class="form-control">
               <div class="my-4">
                   <button class="btn btn-primary" type="submit" > Cadastrar</button>
               </div>
            </div>
            
          </form>
          
        </div>      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>