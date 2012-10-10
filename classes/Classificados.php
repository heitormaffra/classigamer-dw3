<?php

class Classificados {

   private $ofertas;

   public function __construct() {
      $this->ofertas = array();
      $this->ofertas[] = new Oferta("XBox 360", "Usado em bom estado. Acompanha um joystick.", 610.50, "Fulano", "fulano@bol.com.br");
      $this->ofertas[] = new Oferta("PS 2", "Usado em bom estado. Acompanha dois joysticks.", 210.00, "Fulano", "fulano@bol.com.br");
      $this->ofertas[] = new Oferta("Gears of War", "Novo. Região 4.", 90.00, "Ciclano", "cds@yahoo.com.br");
      $this->ofertas[] = new Oferta("Atari 2600", "Raridade! Acompanha duas manetes.", 1290.00, "Beltrano", "bel@gmail.com.br");
   }

   public function getOfertas() {
      return $this->ofertas;
   }

   public function setOfertas($ofertas) {
      $this->ofertas = $ofertas;
   }

   public function listOfertasByPreco($inicial = 0.0, $final = INF) {
      $ofertas = array();
      foreach ($this->ofertas as $oferta) {
         if (
                 $inicial <= $oferta->getPreco()
                 && $oferta->getPreco() <= $final) {
            $ofertas[] = $oferta;
         }
      }
      return $ofertas;
   }
   
   public function listOfertasByTexto($texto) {
      $ofertas = array();
      foreach ($this->ofertas as $oferta) {
         if (
                 strstr($texto, $oferta->getDescricao()) ) {
            $ofertas[] = $oferta;
         }
      }
      return $ofertas;
   }

}

