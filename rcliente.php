  <?php
              require'conexao.php';
              if (isset($_POST['nome']) && !empty($_POST['nome'])) {
               
               $nome=addslashes($_POST['nome']);
               $bi=addslashes($_POST['bi']);
               $numcasa=addslashes($_POST['ncasa']);
               $quarteirao=addslashes($_POST['quarteirao']);
               $contacto=addslashes($_POST['contacto']);
                $sql="INSERT INTO cliente set bi='$bi',nome_cliente='$nome',casa_num='$numcasa',quart='$quarteirao',conatcto='$contacto'";
                  $pdo->query($sql);
                  header("Location:index.php"); 
              } 
              
    
          ?>