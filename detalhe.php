<?php

require_once 'classes/Classificados.php';
require_once 'classes/Oferta.php';

$classificados = new Classificados();
$ofertas = $classificados->getOfertas();
      
        $i = $_REQUEST["id"];

        $oferta = $ofertas[$i];
        
require_once 'views/detalheOferta.php';
      ?>
         