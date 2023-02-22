<?php

 $nome = $_POST['nome'];
 $email = $_POST['email'];
   /*echo"
      $nome <br>
      $email
    ";*/
  include('abre.php');
  include('menu.php');
  include('conexao.php');
    $sql = "INSERT INTO agenda(nome, email) values('$nome','$email')";

    if(   mysql_query($sql) ) {
           echo "<script> alert ('Registrado com Sucesso!') </script> ";
           echo "<script> self.location='incluir.php' </script> ";
    }
    else{
       echo "<script> alert ('Problema na Inclusão!') </script> ";
       die('Alerta:'.$sql);
    }
    include('fecha.php');

?>



