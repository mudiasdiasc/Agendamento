<?php
$produto= $_POST['produto'];
  //echo $produto;
 $alt=substr($produto,0,-4);   //captura um pedaço da string
 echo $alt;

?>




<HTML>
<HEAD>
 <TITLE>Produtos</TITLE>
</HEAD>
<BODY>
     <h1>Brinde Escolhido</h1>
     
     <img src="imagens/<?php echo $produto; ?>">
     
     
     <?php
        echo "<img src=\"imagens/$produto\" alt=\"$alt\">";
        echo"<br> $alt";
     ?>
     
     <p><a href="produtos.htm">Voltar</a> </p>
</BODY>
</HTML>
