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
                            <li class=""><a class="" href="velho-logan.php">Logan</a></li>
                            <li class=""><a class="" href="wolverine.php">Wolverine</a></li>
                            <li class=""><a class="" href="shield.php">Shield</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <section class="row justify-content-center box-marvel text-center mt-3">

            <div class="col-12 col-md-4">
                <a href="home-de-ferro.php">
                    <div class="col-12">
                        <img class="img-fluid rounded" src="img/homem-de-ferro.jpg" alt="Capa homem de ferro - stark: a queda">
                        <h4 class="m-1"><strong>Homem de Ferro - Stark: A Queda</strong></h4>
                        <p class="text-justify m-2">Tony stark ludibriou norman osborn... </p>
                    </div>
                </a>
            </div>


            <div class="col-12 col-md-4">
                <a href="deadpool.php">
                    <div class="col-12">
                        <img class="img-fluid rounded" src="img/deadpool.jpg" alt="Capa deadpool edição 6">
                        <h4 class="m-1"><strong>Deadpool - #06 (Fresh Start)</strong></h4>
                        <p class="text-justify m-2">Alguém roubou o coração do Comediante Carmim. literalmente!... </p>
                    </div>
                </a>

            </div>


            <div class="col-12 col-md-4">
                <a href="wakanda.php">
                    <div class="col-12">
                        <img class="img-fluid rounded" src="img/wakanda.jpg" alt="Capa wakanda para sempre">
                        <h4 class="m-1"><strong>Wakanda para Sempre</strong></h4>
                        <p class="text-justify m-2">As maiores guerreiras de Wakanda - Okoye, Ayo e Aneka... </p>
                    </div>
                </a>
            </div>


            <div class="row">
                <div class="col-12 col-md-4">
                    <a href="home-de-ferro.php">
                        <div class="col-12">
                            <img class="img-fluid rounded" src="img/shield.jpg" alt="Capa agentes da shield - tiro perfeito">
                            <h4 class="m-1"><strong>Agentes da SHIELD - Tiro Perfeito</strong></h4>
                            <p class="text-justify m-2">O agente especial Phil Coulson e sua equipe da S.H.I.E.L.D. reúnem os melhores e mais brilhantes...</p>
                        </div>
                    </a>

                </div>


                <div class="col-12 col-md-4">
                    <a href="deadpool.php">
                        <div class="col-12">
                            <img class="img-fluid rounded" src="img/velho-logan.jpg" alt="Capa o velho logan">
                            <h4 class="m-1"><strong>O Velho Logan</strong></h4>
                            <p class="text-justify m-2">Logan continua em busca de uma cura para seu cada vez pior fator de cura...</p>
                        </div>
                    </a>

                </div>


                <div class="col-12 col-md-4">
                    <a href="wakanda.php">
                        <div class="col-12">
                            <img class="img-fluid rounded" src="img/wolverine.jpg" alt="Capa o retorno de wolverine edição 4">
                            <h4 class="m-1"><strong>O Retorno de Wolverine #04</strong></h4>
                            <p class="text-justify m-2">A equipe de ex-Vingadores do Homem de Ferro chega ao grande banco de dados do Senhor Sinistro...</p>
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
