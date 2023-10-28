
<?php 
include 'Pessoa.php';
include 'Curso.php';
include 'Produto.php';
require ('ContaBancaria.php');
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

