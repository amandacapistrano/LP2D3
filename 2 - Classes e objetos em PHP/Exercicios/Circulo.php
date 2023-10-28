<?php
class Circulo{
    private $raio;

    function __construct($raio){
        $this->raio = $raio;
    }
    function get_raio(){
        return $this->raio;
    }
    function area(){
        $pi = 3.14;
        return "<br>A área do circulo é: ".$pi * ($this->raio * $this->raio);
    }
    function circunferencia(){
        $pi = 3.14;
        return "<br>A circunferência do circulo é: ". 2 * $pi * $this->raio;
    }

}

$circulo1 = new Circulo(15);
echo '<br><b>Classe Circulo:</b>';
echo"<br>Raio do circulo: ".$circulo1->get_raio();
echo $circulo1->area();
echo $circulo1->circunferencia();

?>