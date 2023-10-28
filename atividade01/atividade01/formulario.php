
<?php 
include 'ex1/Pessoa.php';
include 'ex4/Curso.php';
include 'ex3/Produto.php';
require ('ex2/ContaBancaria.php');
session_start();

$retorno = ''; 
$mostrarForm = true;

    if (isset($_SESSION['pessoa'])) {
        $pessoa = $_SESSION['pessoa'];
        
        $conta = new ContaBancaria($pessoa, rand(1000, 9999), rand(-10000, 10000));

        $curso = new curso("Programação descomplicada","www.youtube.com/user/progdescomplicada");
        $arraycursos[] = $curso;
        $curso = new curso("Curso PHP moderno","https://www.youtube.com/watch?v=dLHlHTsFqvk");
        $arraycursos[] = $curso;
        $curso = new curso("Curso de JavaScrip", "https://www.youtube.com/watch?v=Ptbk2af68e8");
        $arraycursos[] = $curso;
        //print_r($arraycursos);
        $catalogoCurso = $arraycursos;
        $cursos = '<h4>Cursos:</h4> <ul>';
        foreach ($catalogoCurso as $curso) {
            $cursos.= '<li>' . $curso->get_nome() . ' - ' . $curso->get_link() . '</li>';
        }
        $cursos.='</ul>';


        $produto = new Produto("Fone", 80.00);
        $arrayProdutos[] = $produto;
        $produto = new Produto("Teclado", 70.20);
        $arrayProdutos[] = $produto;
        $produto = new Produto("Mouse", 48.80);
        $arrayProdutos[] = $produto;

        $CatalogoProd = $arrayProdutos;
        $produtos = '<h4>Produtos com desconto: </h4><ul>';
        foreach($CatalogoProd as $produto ){
            $produtos.= '<li>'.$produto->get_nome().' - R$'. $produto->get_preco().'</li>';
        }
        $produtos.='</ul>';

    

       if($conta->get_saldo() > 0 ){
        $retornoConta = "<h3>Seu saldo da conta bancária é: R$".$conta->get_saldo()."</h3><br>
        Veja algumas ofertas de produtos para você e alguns cursos:<br>".$cursos."<br>".$produtos;

        }else{
        $retornoConta = "<h3>Seu saldo da conta bancária é negativo: R$".$conta->get_saldo()."</h3><br>
        Veja alguns cursos de programação para ganhar dinheiro e sair das dívidas:<br>".$cursos;
        }
        

        $retorno = $pessoa->apresentar().$retornoConta;
      
        unset($_SESSION['pessoa']);
        $mostrarForm = false;

        }
    
  ?>  



<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
    <style>
        /* Estilos gerais */
body {
  background-color: #f0f0f0; /* Fundo claro */
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

/* Estilos para o banner */
.container-admin-banner {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 20px;
}

/* Estilos para o formulário */
.container-form {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: white; /* Fundo branco */
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  color: black; /* Texto preto */
}

.container-form h1 {
  text-align: center;
}

/* Estilos para os campos de entrada */
form {
  display: grid;
  grid-gap: 10px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="number"] {
  width: 100%;
  padding: 10px;
  border: none;
  background-color: #f0f0f0; /* Fundo claro para os campos */
  color: black; /* Texto preto */
  border-radius: 5px;
}

/* Estilos para o botão */
.botao-cadastrar {
  display: block;
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  border: none;
  color: white;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
  text-align: center;
}

.botao-cadastrar:hover {
  background-color: #0056b3;
}

    </style>
</head>
<body>
<main>

<?php echo $retorno ?? ''; ?> <!-- Exibir o retorno somente se estiver definido -->

<?php if ($mostrarForm) { ?>
    <section class="container-admin-banner">
        <h1>Formulário</h1>
    </section>
    <section class="container-form">


        <form method="post" action="processar-formulario.php">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do produto" required>
            
            <label for="idade">Idade</label>
            <input type="number" id="idade" name="idade" placeholder="Digite sua idade" required>

            <label for="profissao">Profissão</label>
            <input type="text" id="profissao" name="profissao" placeholder="Digite uma profissao" required>
           
            <input type="submit" name="Enviar" class="botao-cadastrar" value="Cadastrar usuario"/>
        </form>
    </section>
    <?php } ?>

</main>
</body>
</html>

