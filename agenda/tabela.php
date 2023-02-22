<?php

   include('conexao.php');

   $resultado= mysql_query($sql,$conexao);
   $linhas = mysql_num_rows($resultado);
   //echo $linhas;

   if($linhas ==0){
     die('Sem Registros!');
   }

    echo '

<table border="1" width="100%">
<tr>
  <td>Codigo</td>
  <td>Nome</td>
  <td>Email</td>
  <td>Excluir</td>
</tr> ';
   for($x=0;$x<$linhas; $x++ ) {
   $codigo = mysql_result($resultado,$x,'codigo');

   $nome = mysql_result($resultado,$x,'nome');
   $nome = "<a href='alterar.php?codigo=$codigo'> $nome </a> ";

   $email = mysql_result($resultado,$x,'email');

   $excluir="<img src='imagens/delete.jpg'> ";
   $excluir="<a href='excluir.php?codigo=$codigo'> $excluir </a> ";


echo"
<tr>
  <td>$codigo</td>
  <td>$nome</td>
  <td>$email</td>
  <td>$excluir</td>
</tr>    ";
 }
echo'
</table>




    ';





?>
