<?php
class Pessoa{
    private $nome;
    private $idade;
    private $profissao;

    function __construct($conn){
        $this->conn = $conn;
      
    }
    function get_nome(){
        return $this->nome;
    }
    function set_nome($nome){
        $this->nome = $nome; 
    }
    function get_idade(){
        return $this->idade;
    }
    function set_idade($idade){
        $this->idade = $idade;
    }
    function get_profissao(){
        return $this->profissao;
    }
    function set_profissao($profissao){
        $this->profissao = $profissao;
    }

    function cadastrar($nome, $idade, $profissao){
        $sql = "INSERT INTO pessoa (nome, idade, profissao) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $idade, $profissao);

         if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function apresentar(){
        return "<h3>Olá, meu nome é ".$this->nome.", tenho ".$this->idade." anos e sou ".$this->profissao.".</h3>";
    }

   
}



?>