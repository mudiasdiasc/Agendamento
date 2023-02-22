<?php
$conexao = mysql_connect('localhost','root','admin');


 if($conexao) {
        if(!mysql_select_db('meudatabase',$conexao)) {
          die('Error:'.mysql_error($conexao));
        }

 }
 else{

 }
    //<input type="checkbox">echo 'conectado com sucesso';
?>
