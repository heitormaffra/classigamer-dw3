<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Classigamers: Busca</title>
      <link rel="stylesheet" href="estilos/classigamers.css" />
      <link rel="stylesheet" href="estilos/lista-ofertas.css" />
   </head>
   <body>
      <h1>Classigamers: Busca</h1>
      <p>Busca ofertas por preço.</p>
      <form method="POST">
         Preço de <input type="text" name="txtInicial" value="" />
         até <input type="text" name="txtFinal" value="" />
         <input type="submit" />
      </form>
      
      <p>Busca ofertas por texto.</p>
      <form method="POST">
         Buscar por <input type="text" name="txtTexto" value="" />
         <input type="submit" />
      </form>
      
   </body>
</html>
