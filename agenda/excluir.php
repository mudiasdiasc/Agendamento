<?php


      include('conexao.php');
      include('abre.php');
      include('menu.php');

 $codigo = $_GET['codigo'];
     //echo $codigo;

 $sql ="DELETE FROM agenda WHERE codigo='$codigo' ";
       if (mysql_query($sql)) {
       
         if(mysql_affected_rows($conexao) ==0){
          echo "<script> alert('Registro excluido por putro usuario!') </script>";
          echo "<script> self.location='listar.php' </script>";
            } else{
                    echo "<script> alert('Registro excluido!') </script>";
          echo "<script> self.location='listar.php' </script>";
            }
       
       }
       else{
       echo "<script> alert ('Registro não excluido!') </script>";
       die($sql);
       }
       
      include('fecha.php');
?>
