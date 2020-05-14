<?php
include('../../templates/header.php');
include('banco.php');
?>

<div class="container">
    <section class="row">
        <div class="col-lg-4">
            <h2 class="titulo-carol-home text-center">Super-herói desconstruindo estereótipos e combatendo preconceitos</h2>
            <img src="img/img01.jpg" alt="Capa Super-herói desconstruindo estereótipos" class="img-fluid d-block mx-auto">
        </div>

        <div class="col-lg-6 border text-center">
            <p class="text-center">Quando pensamos em HQ de Super-heróis, provavelmente vem em mente o Super-homem, o Batman, o Homem de Ferro,
                o Capitão América, o Homem-aranha, ou até outros, sendo que todos possuem algo em comum: são homens héteros musculosos,
                envoltos da construção de uma masculinidade voltada aos conceitos tradicionais e hegemônicos do que é “ser homem”.
                A masculinidade hegemônica e heteronormativa (e muitas vezes tóxica) é muito atrelada ao arquétipo do herói
                (falei um pouco mais sobre isso aqui, ao analisar o Thor em Vingadores Ultimato). É possível afirmar que hoje já temos uma representatividade
                e diversidade maior nas HQ de super-heróis mainstream, se comparado há algumas décadas atrás, porém ainda temos muito o que avançar.
                Nesse contexto que trago a HQ independente Cara-Unicórnio, de Adri A., que apresenta um super-herói envolto das cores da bandeira LGBTQ+
                em seu uniforme. O protagonista David se transforma em um unicórnio depois de ter sido picado por um unicórnio radioativo.</p>
        </div>

        <div class="col-md-12 col-lg-2">

            <?php foreach (Posts('aleatorio') as $key => $value) { ?>

                <div class="col-12">

                    <a href="noticia.php?id=<?php echo $value['id']; ?>">
                        <img src="<?php echo $value['imagem']; ?>" alt="Capa <?php echo $value['titulo']; ?>" class="img-fluid d-block mx-auto">
                        <h2 class="text-center titulo-carol-home-dois"><?php echo substr($value['titulo'], 0, 40) . '...'; ?></h2>
                    </a>
                </div>
            <?php } ?>

        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <h2>Mangas e quadrinhos LGBTQ+</h2>
            <p>Vivemos uma época de direitos iguais, amor e alegria para todos. E para todos mesmo! É época de se orgulhar de suas escolhas! Celebre o orgulho LGBT!</p>
        </div>
    </section>

    <section class="row mb-3 justify-content-center">
        <div class="col-md-4">
            <div class="col-11 border text-center">
                <a href="#" data-toggle="modal" data-target="#modalLGBT_um">
                    <img src="img/img02.jpg" alt="Capa HQ da marvel LGBT" class="img-fluid d-block mx-auto">
                    <h2 class="titulo-carol-home text-center">HQ da marvel LGBT</h2>
                </a>
            </div>

        </div>

        <div class="col-md-4">
            <div class="col-11 border text-center">
                <a href="#" data-toggle="modal" data-target="#modalLGBT_dois">
                    <img src="img/img03.jpg" alt="Capa Manga Loveless" class="img-fluid d-block mx-auto">
                    <h2 class="titulo-carol-home text-center">Manga Loveless</h2>
                </a>
            </div>
        </div>


        <div class="col-md-4">
            <div class="col-11 border text-center">
                <a href="#" data-toggle="modal" data-target="#modalLGBT_tres">
                    <img src="img/img04.jpg" alt="Capa HQ justin" class="img-fluid d-block mx-auto">
                    <h2 class="titulo-carol-home text-center">HQ justin</h2>
                </a>
            </div>
        </div>
    </section>
</div>



<?php

include('modalLGBT.php');

include('../../templates/footer.php');

?>