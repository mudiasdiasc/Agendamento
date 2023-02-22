   <?php
      $codigo = $_GET['codigo'];
       //echo $codigo;





   ?>






<HTML>
<HEAD>
 <TITLE>Figura</TITLE>
</HEAD>
<BODY>
   <h1>Figura Escolhida</h1>
   
   <?php

   echo "<img src='imagens/fig$codigo.jpg' width='500'>";

   ?>
   
   <p> <a href="for-figuras.php"> Voltar </a> </p>
</BODY>
</HTML>
