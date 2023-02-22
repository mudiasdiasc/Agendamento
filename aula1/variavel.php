  <?php

  $vendas1=36250.20;
  $vendas2=10;
  
  $soma =$vendas1+$vendas2;
  
  $soma='R$'. number_format($soma,2,',','.');
  //A formatação é sempre em baixo!
   $vendas1= number_format($vendas1,2,',','.');


  ?>

<HTML>
<HEAD>
 <TITLE>VARIAVEL</TITLE>
</HEAD>
<BODY>
 <?php
 echo 'Valor de Vendas 1:  &nbsp &nbsp &nbsp'.$vendas1. '<br>';


echo 'Valor de vendas 2: '.$vendas2.'<br>' ;
       echo "<h1>Total de vendas: $soma.</h1>" ;



?>
    
</BODY>
</HTML>
