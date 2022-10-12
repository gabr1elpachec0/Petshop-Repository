<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Petshop</title>
</head>

<body>
    <header>
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top shadow">
                <a href="#"><img id="logo" src="img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle-navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a href="principal" class="nav-item">Home</a>
                        <a href="produtos" class="nav-item">Produtos</a>
                        <a href="banhoTosa" class="nav-item">Banho e Tosa</a>
                        <a href="home" class="nav-item">Login/Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
</body>

</html>

<!--Erro de instalação do "composer require laravel/ui" devido ao arquivo "composer.lock" e a pasta "vendor". Após excluí-los, o comando foi executado corretamente.-->