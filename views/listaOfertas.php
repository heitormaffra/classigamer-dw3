<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Classigamers</title>
      <link rel="stylesheet" href="estilos/classigamers.css" />
      <link rel="stylesheet" href="estilos/lista-ofertas.css" />
   </head>
   <body>
      <h1>Classigamers</h1>
      <h2>Ofertas</h2>
      <div id="lista-ofertas">
      <?php
      for($i=0;$i<count($ofertas);$i++){
         $oferta = $ofertas[$i];
      ?>
         <div class="oferta">
            <div class="titulo"><a href="detalhe.php?id=<?=$i?>"><?=$oferta->getTitulo()?></a></div>
            <div class="preco"><?=$oferta->getPreco()?></div>
            <div class="descricao"><?=$oferta->getDescricao()?></div>
            <div class="contato"><a href="mailto:<?=$oferta->getEmail()?>"><?=$oferta->getContato()?></a></div>
         </div>
          
      <?php 
         }
      ?>         
      </div>
      <div>
              <a href="busca.php">Buscar Ofertas</a>
          </div>
   </body>
</html>