<?php

$nome = $_GET['nome'];
$email = $_GET['email'];

$peso = $_GET['peso'];
$peso = str_replace(',','.',$peso);


$altura = $_GET['altura'];
$altura = str_replace(',','.',$altura);

 //Formatação
$imc =$peso/($altura*$altura);
$imc = number_format($imc,2,',','.');
$peso = number_format($peso,2,',','.');
$altura = number_format($altura,2,',','.');


//echo $nome;


?>


<HTML>
<HEAD>
 <TITLE>Novo Documento</TITLE>
</HEAD>
<BODY>
  <h1>Suas Informações</h1>
<?php
   echo "
     NOME: $nome <br>
     E-MAIL: $email <br>
     PESO: $peso <br>
     ALTURA: $altura <br>
     SEU-IMC: $imc <br>

   ";

?>
  
  
  <p> <a href="links.htm"> Voltar </a> </p>
</BODY>
</HTML>
