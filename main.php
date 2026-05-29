<?php
  class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
      $this->nome = $nome;
      $this->idade = $idade;
    }

    public function apresentar(){
      return "Olá, meu nome é $this->nome e eu tenho
      $this->idade anos de idade!\n";
    }

    public function verificaIdade(){
      // if($this->idade >= 18){
      //   return "$this->nome é maior de idade!\n";
      // }else{
      //   return "$this->nome é menor de idade!\n";
      // }
      return ($this->idade >= 18) ? "$this->nome é maior de idade!\n" : "$this->nome é menor de idade!\n";
    }
  }

  // $Ana = new Pessoa("Ana", 17);
  // echo $Ana->apresentar();
  // echo $Ana->verificaIdade();
  // $Bruno = new Pessoa("Bruno", 21);
  // echo $Bruno->apresentar();
  // echo $Bruno->verificaIdade();
  // $Clarice = new Pessoa("Clarice", 18);
  // echo $Clarice->apresentar();
  // echo $Clarice->verificaIdade();

$nomes = ["Ana", "Bruno", "Carla", "Diego", "Eduarda", "Felipe", "Gabriela", "Heitor", "Ingrid", "Julio"];
$idades = [17, 26, 14, 18, 42, 26, 32, 48, 17, 16];

for($i = 0; $i <= count($nomes) - 1; $i++){
  ${$nomes[$i]} = new Pessoa($nomes[$i], $idades[$i]);
}

  foreach($nomes as $nome){
    echo ${$nome}->apresentar();
    echo ${$nome}->verificaIdade();
  }
?>