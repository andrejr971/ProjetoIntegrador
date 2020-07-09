<?php
include('../../templates/header.php');
include('../../php/banco.php');

?>
<div role="main" class="container">
    <div class="col-12">
        <img src="img/img13.jpg" role="img" class="d-block w-100 img-bordas" alt="capa com todos os anti herois citados na pagina">
    </div>
    <main class="m-1">
        <div class="col-12 mb-2">
            <article role="article">
                <h1 class="titulo text-center" >Anti-herói</h1>
                <p class="text-justify" role="main">O que é um anti-herói?
                    Basicamente, o anti-herói é uma espécie de protagonista – personagem central da história – que tem
                    aspectos da moralidade que tradicionalmente associamos aos antagonistas.

                    Um anti-herói é um protagonista que é tão falho ou mais falho do que a maioria dos personagens. Ele
                    é alguém que perturba o leitor com suas fraquezas, mas é retratado com simpatia e amplia as
                    fragilidades da humanidade.
                    Um anti-herói também pode desempenhar o papel de um estranho ou solitário. Muitas das vezes possui
                    auto-estima frágil, falhou no amor ou está distante das pessoas do seu passado.

                    O leitor ama esses personagens porque eles são realistas e relacionáveis, imperfeitos e agitados com
                    contradições.

                    Também podem ser rebeldes em busca de liberdade ou justiça, e geralmente estão dispostos a tomar a
                    lei em suas próprias mãos. Eles geralmente ocupam uma área cinzenta entre o cara legal e o vilão.
                    Assim como Jack Sparrow nos filmes de Piratas do Caribe. Até mesmo Robin Hood se encaixa nesta
                    categoria.

                    Os anti-heróis podem ser desagradáveis, lamentáveis ou encantadores, mas são sempre heróis
                    fracassados ou profundamente falhos. Frequentemente repletos de traços e qualidades paradoxais. Eles
                    se assemelham mais a pessoas reais do que qualquer outro tipo de personagem fictício.

                </p>

            </article>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="titulo text-center">Personagens</h2>
            </div>
        </div>

        <div class="row rounded text-center">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="zoom">
                    <a href="personagens.php?persona=justiceiro" role="link">
                        <img src="img/img03.jpg" role="img" alt="Frank Castle (Justiceiro) em cima de corpos que ele matou" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="zoom">
                    <a href="personagens.php?persona=wolverine" role="link">
                        <img src="img/img04.jpg" role="img" alt="wolverine mostrando suas garras" class="img-responsive">
                    </a>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="zoom">
                    <a href="personagens.php?persona=mulher_gato" role="link">
                        <img src="img/img01.jpg" role="img" alt="mulher gato lutando contra varios policiais" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
include('../../templates/modalHome.php');
include('../../templates/footer.php');
?>
