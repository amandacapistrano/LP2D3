<?php
class Pessoa{
    private $nome;
    private $idade;
    private $profissao;

    function __construct($nome, $idade, $profissao){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    function apresentar(){
        return "<br>Olá, meu nome é ".$this->nome.", tenho ".$this->idade." anos e sou ".$this->profissao.".";
    }
}
echo "<b>Classe Pessoa:</b>";

$pessoa1 = new Pessoa("João", 30, "dentista");
echo $pessoa1->apresentar()."<br>";


?>