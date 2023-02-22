<?php
  $pesq ='';
  $coluna ='';
  
  if(isset($_POST['pesq'])) {
   $pesq =$_POST['pesq'];
  $coluna =$_POST['coluna'];
  }

  include('abre.php');
  include('menu.php');
?>
  <form method="post" action="pesquisar.php">
    <p>
    Categoria:
    <select name="coluna">
    <option value="nome"> Nome </option>
     <option value="email"> Email </option>

     </select>
    </p>
  
  
     <p>
       PESQUISAR: <input type="text" name="pesq">
       <input type="submit" value="BUSCAR">
     </p>
  
  
   </form>
  
   <?php
   $pesq=trim($pesq);
   
      if($pesq !=''){
       $sql ="SELECT * FROM agenda WHERE $coluna LIKE '%$pesq%' ";
        include('tabela.php');
      }
   
   
   
   include('fecha.php');
?>
