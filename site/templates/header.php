<?php
$url = explode("/", $_SERVER['REQUEST_URI']);
$resultado = in_array('autores', $url);



function verificaCss()
{
    $url = explode("/", $_SERVER['REQUEST_URI']);

    $nomes = ['andre', 'caio', 'carol', 'henrique', 'vinicius', 'wagner'];

    foreach ($nomes as $nome) {
        if (in_array($nome, $url)) {
            foreach ($url as $nomeUrl) {
                if ($nome == $nomeUrl) {
                    return $nome;
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?php echo !$resultado ? "" : "../../"; ?>img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../"; ?>css/style.css">

    <?php if (verificaCss()) { ?>
        <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../"; ?>autores/<?php echo verificaCss() ?>/css/style.css">
    <?php } ?>

    <title>Quadrinhos</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-md sticky-top">
        <div class="container">
            <button class="navbar-toggler box_button" data-toggle="collapse" data-target=".navbar-collapse" onclick="menuIcon(this)">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </button>

            <div class="row justify-content-center">
                <a class="navbar-brand" href="<?php echo !$resultado ? "" : "../../"; ?>index.php">
                    <img src="<?php echo !$resultado ? "" : "../../"; ?>img/logo.png" alt="Logotipo Parallel Universe">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?php echo !$resultado ? "" : "../../"; ?>index.php" class="nav-link">Home</a></li>
                    <li class="dropdown menu-large nav-item"> <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Categorias</a>
                        <ul class="dropdown-menu megamenu">
                            <li class="dropdown-item">
                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-2 text-center mb-2">
                                        <a href="<?php echo !$resultado ? "" : "../../"; ?>autores/caio/index.php">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../"; ?>img/bg_ficcao.jpg" alt="Logotipo Ficção Científica - Menu">
                                            <div>Ficção Científica</div>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2 text-center mb-2">
                                        <a href="<?php echo !$resultado ? "" : "../../"; ?>autores/vinicius/index.php">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../"; ?>img/bg_marvel.jpg" alt="Logotipo Marvel - Menu">
                                            <div>Marvel</div>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2 text-center mb-2">
                                        <a href="<?php echo !$resultado ? "" : "../../"; ?>autores/andre/index.php">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../"; ?>img/bg_dc.jpg" alt="Logotipo DC - Menu">
                                            <div>DC</div>
                                        </a>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-2 text-center mb-2">
                                        <a href="<?php echo !$resultado ? "" : "../../"; ?>autores/carol/index.php">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../"; ?>img/bg_lgbt.jpg" alt="Logotipo LGBT - Menu">
                                            <div>LGBTQ+</div>
                                        </a>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-2 text-center">
                                        <a href="<?php echo !$resultado ? "" : "../../"; ?>autores/wagner/index.php">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../"; ?>img/bg_manga.jpg" alt="Logotipo Mangá - Menu">
                                            <div>Mangá</div>
                                        </a>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-2 text-center">
                                        <a href="<?php echo !$resultado ? "" : "../../"; ?>autores/henrique/index.php">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../"; ?>img/bg_anti.jpg" alt="Logotipo Anti-Heróis - Menu">
                                            <div>Anti-Heróis</div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <li class="nav-item"><a href="<?php echo !$resultado ? "" : "../../"; ?>contato.php" class="nav-link">Contato</a></li>
                    <li class="nav-item"><a href="<?php echo !$resultado ? "" : "../../"; ?>quem-somos.php" class="nav-link">Quem Somos</a></li>
                </ul>
            </div>
        </div>
    </nav>