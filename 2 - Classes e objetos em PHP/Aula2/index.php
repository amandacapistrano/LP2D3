<?php
class Fruta{
    //atributos da classe:
    private $nome;
    public $cor;

    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }
    //Métodos
    //set usa quando é private ou protect
    //usa quando não tem o construct
    //encapsulamento
    function set_nome($nome){
        $this->nome = $nome;
    }
    function set_cor($cor){
        $this->cor = $cor;
    }
    function get_nome(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }
}
//criação de um objeto tipo maça
$maca = new Fruta("Maçã", "Vermelha");
$banana = new Fruta("Banana", "Amarela");
$mamao = new Fruta("Mamão", "Laranja");
/*ANTES DO CONSTRUCT
//Imprimir na tela o nome e a cor dos objetos
$maca->cor = "Vermelho";
$maca->set_nome("Maçã"); //para atributos com o modificador de acesso: private
//$maca->nome = "Maçã"; para atributos com o modificador de acesso: public
*/
echo "<br>".$maca->get_nome();
echo "<br>".$maca->get_cor();
/*
$banana->cor = "Amarelo";
$banana->set_nome("Banana");
//$banana->nome = "Banana Prata";
*/
echo"<br>".$banana->get_nome();
echo"<br>".$banana->get_cor();

echo"<br>".$mamao->get_nome();
echo"<br>".$mamao->get_cor();

?>