      <?php
       $produto = $_POST['produto']
      ?>


<HTML>
<HEAD>
 <TITLE>Produtos 2</TITLE>
</HEAD>
<BODY>
     <h1>Usando switch </h1>
       <?php
       switch($produto){

          default:
          echo '<img src="imagens/bicicleta.jpg">';
          break;

          case 'carrinho':
          echo '<img src="imagens/carrinho.jpg">';
          break;

          case 'videogame':
          echo '<img src="imagens/videogame.jpg">';
          break;
       }
   ?>
   
    <p> <a href="produtos.htm"> Voltar </a> </p>
</BODY>
</HTML>
