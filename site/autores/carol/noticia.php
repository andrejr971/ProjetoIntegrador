<?php
include('../../templates/header.php');
include('banco.php');

?>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2 class="titulo-carol-home text-center"><?php echo $titulo; ?></h2>
            <img src="<?php echo $imagem; ?>" alt="Capa Super-herói desconstruindo estereótipos" class="img-fluid d-block mx-auto">
        </div>

        <div class="col-lg-6 border text-center">
            <p class="text-center"><?php echo $texto; ?></p>
        </div>




        <section class="col-md-12 col-lg-2">
            <?php foreach (Posts('aleatorio') as $key => $value) { ?>
            <?php if ($value['id'] != $_GET['id']) { ?>
            <div class="col-12">
                <a href="noticia.php?id=<?php echo $value['id']; ?>">
                    <img src="<?php echo $value['imagem']; ?>" alt="Capa <?php echo $value['titulo']; ?>" class="img-fluid d-block mx-auto">
                    <h2 class="text-center titulo-carol-home"><?php echo $value['titulo']; ?></h2>
                </a>
            </div>
            <?php }
        } ?>
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
</div>



<?php
include('modalLGBT.php');
include('../../templates/footer.php');
?>
