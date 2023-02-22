<HTML>
<HEAD>
 <TITLE>For Figuras</TITLE>
</HEAD>
<BODY>

<img src="imagens/skol.jpg">
<hr>

 <?php
     for($x=0; $x<24; $x++){
     echo '<img src="imagens/skol.jpg">';


     }
     ?>
     <hr>
     
     <?php
      for($x=1; $x<14; $x++){

          echo "<a href='mostrar-figura.php?codigo=$x'><img src='imagens/fig$x.jpg'> </a>" ;

      }





     ?>







</BODY>
</HTML>
