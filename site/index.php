<?php
include('templates/header.php');
include('php/banco.php');
?>
<div class="container">
    <header>
        <div class="row">
            <div class="col">
                <a href="#" data-toggle="modal" data-target="#new1">
                    <img src="img/home/slide1.jpg" class="d-block w-100 img-bordas" alt="">
                    <h2 class="titulo1">Novo yearbook da Chiaroscuro Studios abordará os super-heróis brasileiros</h2>
                </a>
            </div>
            <div class="col-md-5 col-slide-right">
                <div class="row">
                    <div class="col">
                        <a href="#" class="link-slide" data-toggle="modal" data-target="#new2">
                            <div class="row">
                                <div class="col-5">
                                    <img src="img/home/news1.jpg" class="d-block w-100 img-bordas" alt="">
                                </div>
                                <div class="col">
                                    <h2 class="titulo2-news">Os Cavaleiros das Trevas: livro da Editora Skript aborda 250 versões diferentes do Batman</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-100">
                    <hr>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="#" class="link-slide" data-toggle="modal" data-target="#new3">
                            <div class="row">
                                <div class="col-5">
                                    <img src="img/home/news2.jpg" class="d-block w-100 img-bordas" alt="">
                                </div>
                                <div class="col">
                                    <h2 class="titulo2-news">Niterói ganha exposição de quadrinhistas locais</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-100">
                    <hr>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="#" class="link-slide" data-toggle="modal" data-target="#new4">
                            <div class="row">
                                <div class="col-5">
                                    <img src="img/home/news3.jpg" class="d-block w-100 img-bordas" alt="">
                                </div>
                                <div class="col">
                                    <h2 class="titulo2-news">Coleção do Conan volta ao mercado em parceria entre Panini e Salvat</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-100">
                <hr>
            </div>
        </div>

    </header>
    <main class="row">
        <article class="col-12 col-sm-12 col-md-12 col-lg-8">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="populares" data-toggle="tab" href="#popu" role="tab" aria-controls="populares" aria-selected="true">Populares</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="recomendados" data-toggle="tab" href="#rec" role="tab" aria-controls="recomendados" aria-selected="false">Recomendações</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="popu" role="tabpanel" aria-labelledby="populares">
                    <div class="row">
                        <?php
                        foreach ($bancoHome as $id => $nomes) {
                            ?>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-1 mt-1">
                                <a href="#" class="link-slide" data-toggle="modal" data-target="#quad<?php echo $id; ?>">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="img/home/pop<?php echo $id; ?>.jpg" class="d-block w-100 img-bordas" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 class="titulo3-pop"><?php echo $bancoHome[$id]['nome']; ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="rec" role="tabpanel" aria-labelledby="recomendados">
                    <div class="row">
                        <?php
                        for ($i = 0; $i <= 5; $i++) {
                            $contRand[] = $i;
                        }
                        shuffle($contRand);
                        foreach ($contRand as $contador) {
                            ?>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-1 mt-1">
                                <a href="#" class="link-slide" data-toggle="modal" data-target="#quad<?php echo $contador; ?>">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="img/home/pop<?php echo $contador; ?>.jpg" class="d-block w-100 img-bordas" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 class="titulo3-pop"><?php echo $bancoHome[$contador]['nome']; ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </article>

        <aside class="col-sm-12 col-md-12 col-lg-4">
            <div class="w-100 linhaHr">
                <hr>
            </div>
            <h2 class="titulo1">Últimos Reviews</h2>
            <div class="row m-1">
                <div class="col">
                    <a href="#" class="link-slide" data-toggle="modal" data-target="#new4">
                        <div class="row m-1">
                            <div class="col-12 col-sm-6 col-md-6">
                                <img src="img/home/news3.jpg" class="d-block w-100 img-bordas" alt="">
                            </div>
                            <div class="col">
                                <h3 class="titulo2-news">Coleção do Conan volta ao mercado em parceria entre Panini e Salvat</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row m-1">
                <div class="col">
                    <a href="#" class="link-slide" data-toggle="modal" data-target="#new8">
                        <div class="row m-1">
                            <div class="col-12 col-sm-6 col-md-6">
                                <img src="img/home/news6.jpg" class="d-block w-100 img-bordas" alt="">
                            </div>
                            <div class="col">
                                <h3 class="titulo2-news">Brad Barron, personagem da Sergio Bonelli Editore, chega ao Brasil pela Graphite Editora</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row m-1">
                <div class="col">
                <a href="#" class="link-slide" data-toggle="modal" data-target="#new12">
                        <div class="row m-1">
                            <div class="col-12 col-sm-6 col-md-6">
                                <img src="img/home/news9.jpg" class="d-block w-100 img-bordas" alt="">
                            </div>
                            <div class="col">
                                <h3 class="titulo2-news">Panini inicia a publicação dos Novos Deuses de Jack Kirby.</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </aside>
    </main>

    <section class="news">
        <div class="w-100">
            <hr>
        </div>
        <h2>Últimas Notícias</h2>
        <div class="row m-1">
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-md-12 col-lg-6">
                        <a href="#" data-toggle="modal" data-target="#noticia1">
                            <img src="img/home/news10.jpg" class="d-block w-100 img-bordas" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" data-toggle="modal" data-target="#noticia1">
                            <h3 class="titulo2-news">Contos de Griô adapta lendas africanas</h3>
                        </a>
                        <p>Contos de Griô, de Ana Cristina e Jean Carlos, é uma coletânea de contos e fábulas africanas, reinterpretados pro meio das histórias quadrinhos. A...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-md-12 col-lg-6">
                        <a href="#" data-toggle="modal" data-target="#noticia2">
                            <img src="img/home/news11.jpg" class="d-block w-100 img-bordas" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" data-toggle="modal" data-target="#noticia2">
                            <h3 class="titulo2-news">Mauricio de Sousa e Macoto Tezka revelam novo quadrinho envolvendo a Amazônia</h3>
                        </a>
                        <p>Mauricio de Sousa e Macoto Tezka revelam parceria para terminar obra de Osamu Tezuka sobre a Amazônia.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-1">
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-md-12 col-lg-6">
                        <a href="#" data-toggle="modal" data-target="#noticia3">
                            <img src="img/home/news12.jpg" class="d-block w-100 img-bordas" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" data-toggle="modal" data-target="#noticia3">
                            <h3 class="titulo2-news">Dois pinguins e um grande dilema em Filhote de Mandrião</h3>
                        </a>
                        <p>Will e Wes são dois pacatos pinguins vivendo sua vida tranquilamente no Polo Sul. Wes adora uma atividade física e não consegue ficar parado,...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-md-12 col-lg-6">
                        <a href="#" data-toggle="modal" data-target="#noticia4">
                            <img src="img/home/news13.jpg" class="d-block w-100 img-bordas" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" data-toggle="modal" data-target="#noticia4">
                            <h3 class="titulo2-news">Erick Santos Cardoso deixa o comando da área editorial da Panini</h3>
                        </a>
                        <p>Erick Santos Cardoso não é mais o gerente editorial de publicações da Panini Comics, cargo que ocupava desde março de 2017. Ele mesmo comunicou sua...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php
include('templates/modalHome.php');
include('templates/footer.php');
?>