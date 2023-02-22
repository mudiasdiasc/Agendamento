<HTML>
<HEAD>
 <TITLE>ARRAYS</TITLE>
</HEAD>
<BODY>

<?php
$predio[1]='João';
$predio[2]='Pedro';
$predio[3]='Maria';
$predio[4]='Felipe';
$predio[5]='Gabriel';
$predio[6]='Leticia';
$predio[7]='Daniel';
$predio[8]='Nathan';


$qtd= count ($predio);
echo "total $qtd <br>";

echo " Nome do morador: $predio[3] <hr>";

   for($x=1; $x<=$qtd; $x++){
     echo " Nome do morador: $predio[$x] <br>";

   }

?>



</BODY>
</HTML>
