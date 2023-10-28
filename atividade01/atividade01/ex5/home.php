<?php
// Na página index.php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/iconpipoca.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Filmes</title>
    <style>
  body {
    background-image: url("img/fundocinema.jpg");
    background-size: cover; /* Para cobrir todo o fundo */
    background-repeat: no-repeat; /* Evita repetição da imagem */
  }
</style>
</head>
<body>
    
    <main>
        
        <h2>Filmes favoritos</h2>
        <section class="container-filme">
            <div class="container-filme-titulo">
             
            </div>
            <div class="container-filme-produtos">
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/littlewoman.jpeg">
                    </div>
                    <p>Adoráveis mulheres</p>
                    </div>

                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/parasite.jpg">
                    </div>
                    <p>Parasite</p>
                
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/gonegirl.jpg">
                    </div>
                    <p>Garota Exemplar</p>
                   
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/1408.jpg">
                    </div>
                    <p>1408</p>

                </div>
            </div>
            
        </section>
        <section class="container-filme">
            <div class="container-filme-titulo">
                
            </div>
            <div class="container-filme-produtos">
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/radium.jpg">
                    </div>
                    <p>Radium Girls</p>
              
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/uzumaki.jpg">
                    </div>
                    <p>Uzumaki</p>
                
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/omenu.jpeg">
                    </div>
                    <p>O menu</p>
                   
                </div>
                <div class="container-produto">
                    <div class="container-foto">
                        <img src="img/nope.jpg">
                    </div>
                    <p>Nope</p>
                </div>
            </div>

        </section>
    </main>
</body>
</html>