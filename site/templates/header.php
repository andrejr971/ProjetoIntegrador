<?php 
    $url = explode("/", $_SERVER['REQUEST_URI']);
       $resultado = in_array('autores', $url);
    if (!$resultado) {
        $cssPath = "css/";
    } else {
        $cssPath = "../../";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link rel="icon" type="image/png" href="<?php echo !$resultado ? "" : "../../" ;?>img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo !$resultado ? $cssPath : $cssPath ."css/" ;?>style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>autores/caio/css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>autores/carol/css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>autores/henrique/css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>autores/vinicius/css/style.css">
    <link rel="stylesheet" href="<?php echo !$resultado ? "" : "../../" ;?>autores/wagner/css/style.css">
=======
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="autores/andre/css/style.css">
    <link rel="stylesheet" href="autores/caio/css/style.css">
    <link rel="stylesheet" href="autores/carol/css/style.css">
    <link rel="stylesheet" href="autores/henrique/css/style.css">
    <link rel="stylesheet" href="autores/vinicius/css/style.css">
    <link rel="stylesheet" href="autores/wagner/css/style.css">
>>>>>>> 871a26d4357f077d3b6e45021b75332ea0f22373
    <title>Quadrinhos</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-md">
        <div class="container">

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <div class="box_button" onclick="menuIcon(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <div class="row justify-content-center">
                <a class="navbar-brand" href="<?php echo !$resultado ? "" : "../../" ;?>index.php">
                    <img src="<?php echo !$resultado ? "" : "../../" ;?>img/logo.png" alt="">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="dropdown menu-large nav-item"> <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Categorias</a>
                        <ul class="dropdown-menu megamenu">
                            <li class="dropdown-item">
                                <div class="row">
                                    <div class="col-6 col-md-4 col-lg-2 text-center mb-2">
                                        <a href="#">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../" ;?>img/bg_menu.jpg">
                                            <div>Dark Horse</div>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2 text-center mb-2">
                                        <a href="<?php echo !$resultado ? "" : "../../" ;?>autores/vinicius/index.php">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../" ;?>img/bg_marvel.jpg">
                                            <div>Marvel</div>
                                        </a>

                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2 text-center mb-2">
                                        <a href="#">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../" ;?>img/bg_dc.jpg">
                                            <div>DC</div>
                                        </a>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-2 text-center mb-2">
                                        <a href="#">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../" ;?>img/bg_lgbt.jpg">
                                            <div>LGBTQ+</div>
                                        </a>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-2 text-center">
                                        <a href="#">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../" ;?>img/bg_manga.jpg">
                                            <div>Mangá</div>
                                        </a>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-2 text-center">
                                        <a href="#">
                                            <img class="img-fluid" src="<?php echo !$resultado ? "" : "../../" ;?>img/bg_anti.jpg">
                                            <div>Anti-Heróis</div>
                                        </a>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    <li class="nav-item"><a href="<?php echo !$resultado ? "" : "../../" ;?>contato.php" class="nav-link">Contato</a></li>
                    <li class="nav-item"><a href="<?php echo !$resultado ? "" : "../../" ;?>quem-somos.php" class="nav-link">Quem Somos</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
