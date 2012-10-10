<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Classigamers: Busca</title>
      <link rel="stylesheet" href="estilos/classigamers.css" />
      <link rel="stylesheet" href="estilos/lista-ofertas.css" />
   </head>
   <body>
      
       <div class="oferta">
            <div class="titulo"><?=$oferta->getTitulo()?></div>
            <div class="preco"><?=$oferta->getPreco()?></div>
            <div class="descricao"><?=$oferta->getDescricao()?></div>
            <div class="contato"><a href="mailto:<?=$oferta->getEmail()?>"><?=$oferta->getContato()?></a></div>
       </div>
       
       
       <div align="center"><textarea name="pergunta" rows="4" cols="45"></textarea></div>
       
   </body>
</html>