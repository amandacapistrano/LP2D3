<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

</head>

<body>
  <main>
    <section class="container-admin-banner">
      <h1>Login </h1>
    </section>
    <!--<section class="container-form">-->
    <div class="form-container">
      <form method="post">

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" required>

        <input type="submit" class="botao-cadastrar" name="entrar" value="Entrar" />

      </form>
    </div>
    <div class="form-container">
      <form action="formulario.php" method="post">
        <input type="submit" name="cadastro" class="botao-cadastrar" value="Usuário novo" />

      </form>
    </div>


    <?php
    // Na página login.php
  
    include "conexao.php";
    include "autenticacao.php";

    if ((($_SERVER["REQUEST_METHOD"] == "POST")) && (isset($_POST["entrar"]))) {
      session_start();
      $email = $_POST["email"];
      $senha = $_POST["senha"];

      $login = new autenticacao($conn);
      $usuario = $login->verificarUsuario($email, $senha);

      if ($usuario) {

        $_SESSION["usuario"] = $usuario;

        header("Location: index.php");
        exit;
      } else { ?>
        <div class="container-admin-banner2">
          <h1>Usuário não cadastrado ou senha inválida</h1>
        </div>


        <!-- header("Location: cadastrar-usuario.php");
     exit; -->
    <?php }
    }

    ?>
    <!-- </section> -->
  </main>
</body>

</html>