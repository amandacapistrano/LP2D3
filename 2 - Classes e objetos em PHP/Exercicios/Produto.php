<?php
class Produto{
    private $nome;
    private $preco;

    function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }
    function get_nome(){
        return $this->nome;
    }
    function get_preco(){
        return $this->preco;
    }

}

$produto = new Produto("Arroz", 20.00);
$arrayProdutos[] = $produto;

$produto = new Produto("Macarrão", 14.20);
$arrayProdutos[] = $produto;

$produto = new Produto("Miojo", 4.80);
$arrayProdutos[] = $produto;

//print_r($arrayProdutos);
$catalogo = $arrayProdutos;
echo '<b><br>Classe Produto:</b>';
echo"<br>Catálogo de produtos:<br> ";
foreach($catalogo as $produto ){
    echo "Produto: ".$produto->get_nome()."<br>Preço: R$". $produto->get_preco()."<br><br>";
}

