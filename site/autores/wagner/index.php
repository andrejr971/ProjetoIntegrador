<?php
include('../../templates/header.php');
//Incluido o menu de navegação
?>

<main>
    <div class="container">
        <article>

            <h1 class="text-center">Mangá</h1>

            <div class="row text-center">

                <div class="border rounded mb-3 col-12 col-md-6 col-lg-3">
                    <a href="manga.php?manga=kimetsu">
                        <img src="img/kimetsu0.jpg" class="mt-3 img-fluid" alt="Capa Kimetsu no Yaiaba">
                        <h3>Kimetsu no Yaiba</h3>
                        <p class="text-justify">Depois de ter sua família massacrada por um demônio,
                            Tanjiro, o filho mais velho, sai em busca de uma cura para sua única irmã
                            sobrevivente do massacre que acidentalmente foi transformada em um demônio.</p>
                    </a>
                </div>

                <div class="border rounded mb-3 col-12 col-md-6 col-lg-3">
                    <a href="manga.php?manga=nanatsu">
                        <img src="img/nanatsu0.jpg" class="mt-3 img-fluid" alt="Capa Nanatsu no Taizai">
                        <h3>Nanatsu no Taizai</h3>
                        <p class="text-justify">Uma princesa decide ir atrás dos 7 pecados capitais,
                            pois ela acredita que só eles possuem a força necessária para ajuda-lá a
                            retomar o reino dos Cavaleiros Sagrados que encenaram um golpe de Estado
                            e capturaram o Rei.</p>
                    </a>
                </div>

                <div class="border rounded mb-3 col-12 col-md-6 col-lg-3">
                    <a href="manga.php?manga=overlord">
                        <img src="img/overlord0.jpg" class="mt-3 img-fluid" alt="Capa Overlord">
                        <h3>Overlord</h3>
                        <p class="text-justify">O protagonista é o último membro restante da Guilda de
                            Ainz Ooal Gown. Inicialmente, costumava ser um salaryman, mas ao ser preso
                            no jogo, decide se tornar a lenda do novo mundo.</p>
                    </a>
                </div>

                <div class="border rounded mb-3 col-12 col-md-6 col-lg-3">
                    <a href="manga.php?manga=boku">
                        <img src="img/boku0.jpg" class="mt-3 img-fluid" alt="Capa Boku no Hero">
                        <h3>Boku no Hero</h3>
                        <p class="text-justify">All-Might, vendo que Izuku tem a atitude e o coração
                            de um verdadeiro herói, mesmo sem possuir qualquer poder, resolve passá-lo
                            seus poderes, a fim de torná-lo seu sucessor como o símbolo da paz.</p>
                    </a>
                </div>

            </div>

        </article>
    </div>
</main>

<?php
include('../../templates/footer.php');
//Incluindo o rodapé
?>
