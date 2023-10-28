<?php



session_start();
    
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    require ('ex1/Pessoa.php');

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $profissao = $_POST["profissao"];
    //conexão com o banco de dados;
        $pessoa = new Pessoa($conn);
        $pessoa->set_nome($nome); 
        $pessoa->set_idade($idade); 
        $pessoa->set_profissao($profissao); 
        

        $_SESSION['pessoa'] = $pessoa;

        // Redirecionar para exibir apenas o resultado
        header("Location: formulario.php");
        exit();
    }
?>