<?php
          require 'conexao.php';
          $id=0;
          //instrução para pegar o codigo do cliente  
          if (isset($_GET['id']) && !empty($_GET['id'])) {
              $id=addslashes($_GET['id']);
          }

          $sql="SELECT *FROM Cliente WHERE id_cli=$id";
          $sql=$pdo->query($sql);
          if ($sql->rowCount()>0) {
            $cli=$sql->fetch();  
          
          }else{
              header("Location:print_cli.php");
            
          } 
             
          if (isset($_POST['nome']) && !empty($_POST['nome'])) {
                 $bi=addslashes($_POST['bi']);
                  $nome=addslashes($_POST['nome']);
                  $numcasa=addslashes($_POST['ncasa']);
                  $quarteirao=addslashes($_POST['quarteirao']);
                  $contacto=addslashes($_POST['contacto']);
                  $sql="UPDATE cliente 
                  set bi='$bi',nome_cliente='$nome',casa_num='$numcasa',quart='$quarteirao',conatcto='$contacto'where id_cli=$id";
                    $pdo->query($sql);  
                     header("Location:print_cli.php"); 
             } 
             
          
         ?>
