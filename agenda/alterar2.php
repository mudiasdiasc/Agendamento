<?php
 $codigo = $_POST['codigo'];
 $nome = $_POST['nome'];
 $email = $_POST['email'];
   /*echo"
      $nome <br>
      $email
    ";*/
  include('abre.php');
  include('menu.php');
  include('conexao.php');
  
    $sql = "UPDATE agenda SET nome='$nome',
     email= 'melissa_fernanda@gmail.com' WHERE codigo='$codigo' ";

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



