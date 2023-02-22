<?php
$codigo = $_GET['codigo'];
   //echo $codigo;
   include('abre.php');
   include('menu.php');
   include('conexao.php');
   $sql="SELECT * FROM agenda WHERE codigo='$codigo' ";
   $resultado = mysql_query($sql);
   
   $nome = mysql_result($resultado,0,'nome');
   $email = mysql_result($resultado,0,'email');
   
   
   //echo " $nome <br> $email ";

?>
   <form method="post" action="alterar2.php">
   <input type="hidden" name="codigo" value="<?php echo $email; ?>">
   
   
     <p>Nome: <input type="text" name="nome" value="<?php echo $nome;?>"> </p>
     
     
     <p>E-MAIL: <input type="text" name="email" value="<?php echo $email; ?>"> </p>
     

     <input type="submit" value="Alterar">
      <input type="reset" value="Limpar">

   </form>




<?php
    include('fecha.php');





?>
