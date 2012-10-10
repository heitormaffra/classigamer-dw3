<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $precoInicial = floatval($_POST['txtInicial']);
   $precoFinal = floatval($_POST['txtFinal']);
   $texto = $_POST['txtTexto'];

   require_once 'classes/Classificados.php';
   require_once 'classes/Oferta.php';
   
   $classificados = new Classificados();
   
//   $ofertas = $classificados->listOfertasByPreco($precoInicial, $precoFinal);
   $ofertas = $classificados->listOfertasByTexto($texto);
   
   require_once 'views/listaOfertas.php';
} else {
   require_once "views/buscaOfertas.php";
}