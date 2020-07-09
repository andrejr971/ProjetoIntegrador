<?php
include('../../templates/header.php');
include('banco.php');

?>
<main role="main">
    <div class="row">
        <div class="col-lg-4 border">
            <h1 class="titulo-carol-home text-center"><?php echo $titulo; ?></h1>
            <img src="<?php echo $imagem; ?>" alt="Capa Super-herói desconstruindo estereótipos" class="img-fluid d-block mx-auto">
        </div>

        <div class="col-lg-4 border">
            <h3>
                <p class="text-justify artigo-1"><?php echo $texto; ?></p>
            </h3>
        </div>



        <div class="col-lg-4">
            <?php foreach (Posts('aleatorio') as $key => $value) { ?>
                <a href="noticia.php?id=<?php echo $value['id']; ?>">
                    <img src="<?php echo $value['imagem']; ?>" alt="Capa <?php echo $value['titulo']; ?>" class="img-fluid d-block mx-auto">
                    <h2 class="text-center titulo-carol-home-dois"><?php echo substr($value['titulo'], 0, 40) . '...'; ?></h2>
                </a>

            <?php } ?>
        </div>
    </div>

    <section class="row" class="modais-start">
        <div class="col-12">
            <h1 class="titulo-modais">Mangas e quadrinhos LGBTQ+</h1>
            <p class="texto-modais">Vivemos uma época de direitos iguais, amor e alegria para todos. E para todos mesmo! É época de se orgulhar de suas escolhas! Celebre o orgulho LGBT!</p>
        </div>
    </section>

    <section class="row mb-3 justify-content-center">
        <div class="col-md-4">
            <div class="col-11 border text-center">
                <a href="#" data-toggle="modal" data-target="#modalLGBT_um" aria-label="link para abrir modal com conteudo sobre HQ marvel lgbt">
                    <img src="img/img02.jpg" alt="Dois personagens da Marvel se beijando" class="img-fluid d-block mx-auto">
                    <h2 class="titulo-each-modal text-center">HQ da marvel LGBT</h2>
                </a>
            </div>

        </div>

        <div class="col-md-4">
            <div class="col-11 border text-center">
                <a href="#" data-toggle="modal" data-target="#modalLGBT_dois" aria-label="link para abrir modal com conteudo sobre o mangá loveless">
                    <img src="img/img03.jpg" alt="Capa Manga Loveless com duas personagens se beijando" class="img-fluid d-block mx-auto">
                    <h2 class="titulo-each-modal text-center">Manga Loveless</h2>
                </a>
            </div>
        </div>


        <div class="col-md-4">
            <div class="col-11 border text-center">
                <a href="#" data-toggle="modal" data-target="#modalLGBT_tres" aria-label="link para abrir modal com conteúdo sobre o HQ Justin">
                    <img src="img/img04.jpg" alt="capa do HQ Justin tirando uma selfie" class="img-fluid d-block mx-auto">
                    <h2 class="titulo-each-modal text-center">HQ justin</h2>
                </a>
            </div>
        </div>
    </section>


</main>



<?php
include('modalLGBT.php');
include('../../templates/footer.php');
?>