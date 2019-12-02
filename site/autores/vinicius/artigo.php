<?php
include('../../templates/header.php');
include('banco.php');
?>
<main>
    <div class="container">
        <article class="artigos--marvel">
            <div class="row m-3">
                <div class="col-12 col-md-8 text-center">

                    <div class="marvel-img">
                        <img class="img-fluid rounded shadow-lg p-1 m-3 mx-auto d-block" src="<?php echo $imagem; ?>" alt="Capa <?php echo $value['titulo']; ?>">
                        <h1 class="marvel-title"><?php echo $titulo; ?></h1>
                    </div>
                    <p class="text-justify"><?php echo $texto; ?></p>
                </div>
                <div class="col-12 col-md-4">
                    <aside class="text-center">
                        <div class="text-dark">
                            <h2>Veja Também</h2>
                        </div>

                        <div class="row">
                            <?php foreach (Posts('aleatorio') as $key => $value) { ?>
                                <?php if ($value['id'] != $_GET['id']) { ?>
                                    <div class="col-12 col-md-6">

                                        <a href="artigo.php?id=<?php echo $value['id']; ?>">
                                            <img class="img-fluid rounded" src="<?php echo $value['imagem']; ?>" alt="Capa <?php echo $value['titulo']; ?>">
                                        </a>
                                        <a href="artigo.php?id=<?php echo $value['id']; ?>">
                                            <h2><?php echo $value['titulo']; ?></h2>
                                        </a>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </aside>
                </div>
            </div>

        </article>
    </div>

</main>

<?php
include('../../templates/footer.php');
?>