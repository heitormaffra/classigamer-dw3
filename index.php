<?php
require_once 'classes/Classificados.php';
require_once 'classes/Oferta.php';

$classificados = new Classificados();
$ofertas = $classificados->getOfertas();

require_once 'views/listaOfertas.php';
?>
