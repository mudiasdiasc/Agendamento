    <?php
     if( isset($_POST['idade'])){
      $idade =$_POST ['idade'];
     }
     else{
      header('location:idade.php');
     }

     if(!is_numeric($idade)){
     echo "<script> alert('Valor invalido Criatura!') </script>";
     echo "<script> self.location='idade.php'  </script>";

     }

       //echo $idade;



 ?>

<HTML>
<HEAD>
 <TITLE>Verifica</TITLE>
</HEAD>
<BODY>
     <h1> Sugestão:</h1>
     
      <?php
         if($idade>=18 and $idade <=70)
        {
         echo 'beba Heineken';
       }
     else{
       if($idade <=5 or $idade>70){
         echo 'Coma Papinha!';
       }
       else{
        echo 'Beba Pepsi!';
       }
      }
 ?>
     <p><a href="idade.php">voltar</p>
</BODY>
</HTML>
