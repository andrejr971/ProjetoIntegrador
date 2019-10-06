<?php
include('../../templates/header.php');
include('../../php/banco.php');
?>
<div role="main" class="container">
    <div class="w-100">
        <img src="img/header.jpg" class="d-block w-100 img-bordas" alt="">
    </div>
    <main class="m-1">
        <article>
            <h1 class="titulo">DC Comics</h1>
            <p>DC Comics é uma das grandes empresas norte-americanas de histórias em quadrinhos. A sigla DC significa Detective Comics, o título de uma história em quadrinhos de Batman, publicada em 1939. Os super-heróis criados pela DC Comics fazem parte do chamado "Universo DC", que consagrou Batman e Superman, os personagens mais famosos criados pela DC Comics. Outros personagens representativos da editora são a Mulher Maravilha, Flash, Lanterna Verde, Aquaman, dentre outros.</p>
            <div class="row">
                <div class="w-100">
                    <h2 class="titulo">Notícias</h2>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-2">
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#newDC0">
                            <img src="img/new0.jpg" class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text">Esquadrão Suicida | James Gunn revela foto do roteiro e indica trilha sonora</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-2">
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#newDC1">
                            <img src="img/new1.jpg" class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text">DC divulga nova linha do tempo oficial</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-2">
                    <div class="card">
                        <a href="#" data-toggle="modal" data-target="#newDC2">
                            <img src="img/new2.jpg" class="card-img-top w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text">Descoberto o possível novo Batman da DC Comics</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <section class="row mb-2 secao1">
        <div class="w-100">
            <h2 class="titulo">Personagens Famosos</h2>
        </div>
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="bat-tab" data-toggle="pill" href="#bat" role="tab" aria-controls="bat" aria-selected="true">Batman</a>
                <a class="nav-link" id="ww-tab" data-toggle="pill" href="#ww" role="tab" aria-controls="ww" aria-selected="false">Mulher Maravilha</a>
                <a class="nav-link" id="super-tab" data-toggle="pill" href="#super" role="tab" aria-controls="super" aria-selected="false">Superman</a>
                <a class="nav-link" id="outros-tab" data-toggle="pill" href="#outros" role="tab" aria-controls="outros" aria-selected="false">Outros</a>
            </div>
        </div>
        <div class="col">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="bat" role="tabpanel" aria-labelledby="bat-tab">
                    <div class="row">
                        <?php
                        for ($cont = 0; $cont < 3; $cont++) {
                            ?>
                            <div class="col-4">
                                <a href="personagens.php?personagem=<?php echo "Batman$cont"; ?>">
                                    <img src="<?php echo $bancoDC["Batman$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["Batman$cont"]['alt']; ?>">
                                    <h3 class="titulo3"><?php echo $bancoDC["Batman$cont"]['nome']; ?></h3>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="ww" role="tabpanel" aria-labelledby="ww-tab">
                    <div class="row">
                        <?php
                        for ($cont = 0; $cont < 3; $cont++) {
                            ?>
                            <div class="col-4">
                                <a href="personagens.php?personagem=<?php echo "MulherMaravilha$cont"; ?>">
                                    <img src="<?php echo $bancoDC["MulherMaravilha$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["MulherMaravilha$cont"]['alt']; ?>">
                                    <h3 class="titulo3"><?php echo $bancoDC["MulherMaravilha$cont"]['nome']; ?></h3>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="super" role="tabpanel" aria-labelledby="super-tab">
                    <div class="row">
                        <?php
                        for ($cont = 0; $cont < 3; $cont++) {
                            ?>
                            <div class="col-4">
                                <a href="personagens.php?personagem=<?php echo "Superman$cont"; ?>">
                                    <img src="<?php echo $bancoDC["Superman$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["Superman$cont"]['alt']; ?>">
                                    <h3 class="titulo3"><?php echo $bancoDC["Superman$cont"]['nome']; ?></h3>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="outros" role="tabpanel" aria-labelledby="outros-tab">
                    <div class="row">
                        <?php
                        for ($cont = 0; $cont < 3; $cont++) {
                            ?>
                            <div class="col-4">
                                <a href="personagens.php?personagem=<?php echo "Outros$cont"; ?>">
                                    <img src="<?php echo $bancoDC["Outros$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["Outros$cont"]['alt']; ?>">
                                    <h3 class="titulo3"><?php echo $bancoDC["Outros$cont"]['nome']; ?></h3>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="secao2 mb-2">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="bat2-tab" data-toggle="pill" href="#bat2" role="tab" aria-controls="bat2" aria-selected="true">Batman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="ww2-tab" data-toggle="pill" href="#ww2" role="tab" aria-controls="ww2" aria-selected="false">Mulher Maravilha</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="super2-tab" data-toggle="pill" href="#super2" role="tab" aria-controls="super2" aria-selected="false">Superman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="outros2-tab" data-toggle="pill" href="#outros2" role="tab" aria-controls="outros2" aria-selected="false">Outros</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="bat2" role="tabpanel" aria-labelledby="bat-tab">
                <div class="row">
                    <?php
                    for ($cont = 0; $cont < 3; $cont++) {
                        ?>
                        <div class="col-12 col-sm-4 col-md-4">
                            <a href="personagens.php?personagem=<?php echo "Batman$cont"; ?>">
                                <img src="<?php echo $bancoDC["Batman$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["Batman$cont"]['alt']; ?>">
                                <h3 class="titulo3"><?php echo $bancoDC["Batman$cont"]['nome']; ?></h3>
                            </a>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="ww2" role="tabpanel" aria-labelledby="ww-tab">
                <div class="row">
                    <?php
                    for ($cont = 0; $cont < 3; $cont++) {
                        ?>
                        <div class="col-12 col-sm-4 col-md-4">
                            <a href="personagens.php?personagem=<?php echo "MulherMaravilha$cont"; ?>">
                                <img src="<?php echo $bancoDC["MulherMaravilha$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["MulherMaravilha$cont"]['alt']; ?>">
                                <h3 class="titulo3"><?php echo $bancoDC["MulherMaravilha$cont"]['nome']; ?></h3>
                            </a>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="super2" role="tabpanel" aria-labelledby="super-tab">
                <div class="row">
                    <?php
                    for ($cont = 0; $cont < 3; $cont++) {
                        ?>
                        <div class="col-12 col-sm-4 col-md-4">
                            <a href="personagens.php?personagem=<?php echo "Superman$cont"; ?>">
                                <img src="<?php echo $bancoDC["Superman$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["Superman$cont"]['alt']; ?>">
                                <h3 class="titulo3"><?php echo $bancoDC["Superman$cont"]['nome']; ?></h3>
                            </a>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="outros2" role="tabpanel" aria-labelledby="outros-tab">
                <div class="row">
                    <?php
                    for ($cont = 0; $cont < 3; $cont++) {
                        ?>
                        <div class="col-12 col-sm-4 col-md-4">
                            <a href="personagens.php?personagem=<?php echo "Outros$cont"; ?>">
                                <img src="<?php echo $bancoDC["Outros$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["Outros$cont"]['alt']; ?>">
                                <h3 class="titulo3"><?php echo $bancoDC["Outros$cont"]['nome']; ?></h3>
                            </a>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include('../../templates/modalHome.php');
include('../../templates/footer.php');
?>