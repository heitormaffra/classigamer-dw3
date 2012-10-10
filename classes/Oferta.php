<?php
class Oferta{
   private $titulo;
   private $descricao;
   private $preco;
   private $contato;
   private $email;
   
   function __construct($titulo="Desconhecido", $descricao="", $preco=0.0, $contato="Anônimo", $email="") {
      $this->titulo = $titulo;
      $this->descricao = $descricao;
      $this->preco = $preco;
      $this->contato = $contato;
      $this->email = $email;
   }
   public function getTitulo() {
      return $this->titulo;
   }

   public function setTitulo($titulo) {
      $this->titulo = $titulo;
   }

   public function getDescricao() {
      return $this->descricao;
   }

   public function setDescricao($descricao) {
      $this->descricao = $descricao;
   }

   public function getPreco() {
      return $this->preco;
   }

   public function setPreco($preco) {
      $this->preco = $preco;
   }

   public function getContato() {
      return $this->contato;
   }

   public function setContato($contato) {
      $this->contato = $contato;
   }

   public function getEmail() {
      return $this->email;
   }

   public function setEmail($email) {
      $this->email = $email;
   }


}
