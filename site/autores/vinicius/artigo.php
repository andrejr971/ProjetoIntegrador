<?php
include('../../templates/header.php');
include('banco.php');

?>
<main>
    <div class="container">
        <article class="artigos--marvel" aria-label="<?= $titulo; ?>">
            <div class="row m-3">
                <div class="col-12 text-center">

                    <div class="marvel-img">
                        <img class="img-fluid rounded shadow-lg p-1 m-3 mx-auto d-block" src="<?= $imagem; ?>" alt="Capa <?= $value['titulo']; ?>">
                        <h1 class="h2"><?= $titulo; ?></h1>
                    </div>
                    <p class="text-justify"><?= $texto; ?></p>
                </div>
            </div>
        </article>

        <section class="col-12">
            <h2 class="h4 text-center">Veja Também</h2>
            <div class="row">
                <?php foreach (Posts() as $key => $value) { ?>
                    <?php if ($value['id'] != $_GET['id']) { ?>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="col my-2">
                                    <a href="artigo.php?id=<?= $value['id']; ?>">
                                        <img class="img-fluid" src="<?= $value['imagem']; ?>" alt="Capa <?= $value['titulo']; ?>">
                                    </a>
                                </div>

                                <div class="col my-2">
                                    <a href="artigo.php?id=<?= $value['id']; ?>">
                                        <h3 class="h5"><?= $value['titulo']; ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </section>
    </div>

</main>

<?php
include('../../templates/footer.php');
?>