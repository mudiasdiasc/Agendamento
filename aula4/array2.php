<HTML>
<HEAD>
 <TITLE>Arrays2</TITLE>
</HEAD>
<BODY>
    <?php
    $estado['SP'] ='São Paulo';
      $estado['MG'] ='Minhas Gerais';
        $estado['RJ'] ='Rio de Janeiro';
        
        while($linhas=each($estado)){
           echo "Sigla $linhas[0]: $linhas[1] <br> ";
        }
    ?>
    
    <h2>Fora do while</h2>
</BODY>
</HTML>
