<?php

$titulo = $_POST['titulo'];
$cor = $_POST['cor'];
$tamanho = $_POST['tamanho'] ;

/*echo "
  $titulo <br>
  $cor <br>
  $tamanho
";
  */
?>





<HTML>
<HEAD>
 <TITLE><?php echo $titulo; ?></TITLE>
</HEAD>
<BODY bgcolor="<?php echo $cor; ?>">

    <h1<?php echo $tamanho ?>TAMANHO DA FONTE </h1<?php echo $tamanho ?>>
    
    <p><a href="config1.htm"> Voltar </a> </p>
</BODY>
</HTML>
