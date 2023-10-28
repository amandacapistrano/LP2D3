<?php
require('Carro.php');
require('Retangulo.php');
require('Pessoa.php');
require('ContaBancaria.php');
require('Produto.php');
require('Circulo.php');

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
echo "<br><br><b>Classe Fruta:</b>";
echo "<br>Fruta: ".$maca->get_nome();
echo "<br>Cor: ".$maca->get_cor();
/*
$banana->cor = "Amarelo";
$banana->set_nome("Banana");
//$banana->nome = "Banana Prata";
*/
echo"<br>Fruta: ".$banana->get_nome();
echo"<br>Cor: ".$banana->get_cor();

echo"<br>Fruta: ".$mamao->get_nome();
echo"<br>Cor: ".$mamao->get_cor();

//CRIANDO OBJETO CLASSE CARRO
echo"<br><br>";
echo "<b>Classe Carro:</b>";
$carro1 = new Carro("Volkswagen","Gol", 1999);

echo "<br>Marca: ".$carro1->get_marca();
echo "<br>Modelo: ".$carro1->get_modelo();
echo "<br>Ano: ".$carro1->get_ano();
echo"<br><br>";

//CRIANDO A OBJETO DA CLASSE RETANGULO
echo "<b>Classe Retangulo:</b>";
$retangulo1 = new Retangulo(10, 4);
echo"<br>Largura: ".$retangulo1->get_largura()." e altura: ".$retangulo1->get_altura()." do retangulo";
echo "<br>Área do retangulo1 = ".$retangulo1->calcular_area();
echo "<br>Perimetro do retangulo1 = ".$retangulo1->calcular_perimetro();

?>