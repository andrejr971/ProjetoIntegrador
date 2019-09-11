<?php
    include ('../../templates/header.php');
    //Incluido o menu de navegação
?>
<main>
    <div class="container">


        <section>
            <h2 class="text-center">Marvel</h2>

            <div class="row">
                <div class="col-12">
                    <div class="card testimonial-card-2 mt-2 mb-3">
                        <div class="card-up"></div>
                        <div class="avatar mx-auto">
                            <img src="img/marvel.jpg" class="rounded-circle img-responsiv" alt="Vinicius">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navegacao-marvel">
                        <ul class="nav nav-pills justify-content-center text-center">
                            <li class=""><a class="" href="deadpool.php">Deadpool</a></li>
                            <li class=""><a class="" href="home-de-ferro.php">Homem de Ferro</a></li>
                            <li class=""><a class="" href="wakanda.php">Wakanda</a></li>
                            <li class=""><a class="" href="logan.php">Logan</a></li>
                            <li class=""><a class="" href="wolverine.php">Wolverine</a></li>
                            <li class=""><a class="" href="shield.php">Shield</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 box--marvel">
                    <a href="home-de-ferro.php">
                        <div class="card card-cascade wider mt-2 mb-3 shadow-none">
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="img/homem-de-ferro.jpg" alt="Capa homem de ferro - startk: a queda">
                            </div>

                            <div class="card-body card-body-cascade text-center">
                                <h4 class="card-title"><strong>Homem de Ferro</strong></h4>
                                <h5 class="blue-text pb-2"><strong>Stark: A Queda</strong></h5>
                                <p class="card-text">Tony stark ludibriou norman osborn... </p>
                            </div>
                        </div>
                    </a>

                </div>


                <div class="col-12 col-md-4 box--marvel">
                    <a href="deadpool.php">
                        <div class="card card-cascade wider mt-2 mb-3 shadow-none">
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="img/deadpool.jpg" alt="Capa deadpool edição 6">
                            </div>
                            <div class="card-body card-body-cascade text-center">
                                <h4 class="card-title"><strong>Deadpool</strong></h4>
                                <h5 class="blue-text pb-2"><strong>#06 (Fresh Start)</strong></h5>
                                <p class="card-text">Alguém roubou o coração do Comediante Carmim. literalmente!... </p>
                            </div>
                        </div>
                    </a>

                </div>


                <div class="col-12 col-md-4 box--marvel">
                    <a href="wakanda.php">
                        <div class="card card-cascade wider mt-2 mb-3 shadow-none">
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="img/wakanda.jpg" alt="Capa wakanda para sempre">
                            </div>
                            <div class="card-body card-body-cascade text-center">
                                <h4 class="card-title"><strong>Wakanda</strong></h4>
                                <h5 class="blue-text pb-2"><strong>para Sempre</strong></h5>
                                <p class="card-text">As maiores guerreiras de Wakanda - Okoye, Ayo e Aneka... </p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-12 col-md-4 mb-3  box--marvel">
                    <a href="velho-logan.php">
                        <div class="card-2">

                            <div>
                                <img class="card-img-top" src="img/velho-logan.jpg" alt="Capa o velho logan">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">O Velho Logan</h4>
                                <hr>
                                <p class="card-text">Logan continua em busca de uma cura para seu cada vez pior fator de cura...</p>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 mb-3 box--marvel">
                    <a href="wolverine.php">
                        <div class="card-2">
                            <div>
                                <img class="card-img-top" src="img/wolverine.jpg" alt="Capa o retorno de wolverine edição 4">
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">O Retorno de Wolverine #04</h4>
                                <hr>
                                <p class="card-text">A equipe de ex-Vingadores do Homem de Ferro chega ao grande banco de dados do Senhor Sinistro...</p>

                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-12 col-md-4 mb-3 box--marvel">
                    <a href="shield.php">
                        <div class="card-2">
                            <div>
                                <img class="card-img-top" src="img/shield.jpg" alt="Capa agentes da shield - tiro perfeito">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Agentes da SHIELD - Tiro Perfeito</h4>
                                <hr>
                                <p class="card-text">O agente especial Phil Coulson e sua equipe da S.H.I.E.L.D. reúnem os melhores e mais brilhantes operativos para confrontar...</p>

                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    </div>

</main>

<?php
    include ('../../templates/footer.php');
    //Incluindo o rodapé
?>
