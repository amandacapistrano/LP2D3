<?php
class ContaBancaria{
    private $titular;
    private $numero;
    private $saldo;

    function __construct($titular, $numero, $saldo){
        $this->titular = $titular;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    function deposito($deposito){
        $this->saldo = $deposito + $this->saldo;
        return "Valor: R$".$deposito."<br>Depósito efetuado<br>Novo Saldo: R$".$this->saldo;
    }

    function saque($saque){
        echo "<br>Saque<br>Valor do saque: R$".$saque;
        if($saque > $this->saldo){
            return "<br>O saldo não é suficiente para o saque.<br>Saldo atual: R$".$this->saldo;
        }else{
            $this->saldo = $this->saldo - $saque;
            return "<br>Saque efetuado.<br>Novo saldo: R$".$this->saldo."<br>";
        }
    }
    function dados_conta(){
        return"Conta bancária<br> Nome do titular: ".$this->titular."<br>Número da conta: ".$this->numero."<br>Saldo: R$".$this->saldo;
    }
}
echo"<br><b>Classe conta Bancaria:</b><br>";
//criando um objeto da classe
$titular1 = new ContaBancaria("Maria", 3221, 1000.00);

echo "Dados da conta<br>".$titular1->dados_conta()."<br>";

echo "<br>Depósito<br>".$titular1->deposito(500.50)."<br>";

echo $titular1->saque(1600)."<br>";

echo $titular1->saque(450.30)."<br>";

echo "Dados da conta<br>".$titular1->dados_conta()."<br>";
?>