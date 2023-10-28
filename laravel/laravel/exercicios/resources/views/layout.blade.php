<!DOCTYPE html>
<html lang="en">
<!-- a seção yield será preenchida com o conteúdo específico da view. -->
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <!-- Cabeçalho do site -->
    <header>

    </header>

    <div class="content">
        @yield('content')
    </div>

   <!-- Rodapé -->
    <footer>

    </footer>
</body>

</html>