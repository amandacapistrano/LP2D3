<?php
class Carro{
    //Atributos com identificadores de acesso tipo private
    private $marca;
    private $modelo;
    private $ano;

    function __construct($marca, $modelo, $ano){
        /*if($ano < 2000){
            echo "Ano inferior a 2000 não permitido";
        }else{ CONDIÇÃO*/ 
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        //}
    }

    function set_marca(){
        $this->marca = $marca;
    }
    function set_modelo(){
        $this->modelo = $modelo;
    }
    function set_ano(){
        $this->ano = $ano;
    }

    function get_marca(){
        return $this->marca;
    }
    function get_modelo(){
        return $this->modelo;
    }
    function get_ano(){
        return $this->ano;
    }
    
}
/*
$carro1 = new Carro("Volkswagen","Gol", 2010);

echo "<br>".$carro1->get_marca();
echo "<br>".$carro1->get_modelo();
echo "<br>".$carro1->get_ano();
*/
?>