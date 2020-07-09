<?php
include('../../templates/header.php');

include('banco.php');

//Incluido o menu de navegação
?>
<main>
    <div class="container">
        <section>
            <h1 class="text-center">Marvel</h1>
        </section>

        <section class="container">
            <h2 class="h4 pl-3">Últimos Posts</h2>

            <div class="container">
                <?php foreach (Posts() as $key => $value) { ?>

                    <div class="row my-3">

                        <article role="main">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img class="img-fluid rounded" src="<?= $value['imagem']; ?>" alt="<?= $value['alt']; ?>">
                                </div>

                                <div class="col-md-5">
                                    <h4 class="m-1"><strong><?= $value['titulo']; ?></strong></h4>
                                    <p class="text-justify m-2"><?= substr($value['texto'], 0, 100) . '...'; ?></p>
                                    <a href="artigo.php?id=<?= $value['id']; ?>"><button type="button" class="btn btn-dark btn-block">Ler Mais</button></a>
                                </div>
                            </div>
                        </article>

                    </div>

                <?php } ?>
            </div>
        </section>
    </div>

</main>

<?php
include('../../templates/footer.php');
//Incluindo o rodapé
?>