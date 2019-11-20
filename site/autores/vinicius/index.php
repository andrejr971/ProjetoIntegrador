<?php
include('../../templates/header.php');
include('banco.php');
//Incluido o menu de navegação
?>
<main>
    <div class="container">
        <section>
            <h2 class="text-center">Marvel</h2>
            <div class="row">
                <div class="col-12">
                    <div class="card mt-2 mb-3">
                        <div class="card-fundo-marvel"></div>
                        <div class="avatar mx-auto">
                            <img src="img/marvel.jpg" alt="Vinicius">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="">
                        <ul class="nav nav-pills flex-column flex-sm-row justify-content-center">

                            <?php foreach (Posts('aleatorio') as $key => $value) { ?>
                                <li class=""><a class="flex-sm-fill text-sm-center nav-link btn btn-outline-secondary mb-md-3" href="artigo.php?id=<?php echo $value['id']; ?>"><?php echo $value['titulo'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <section class="row justify-content-center box-marvel text-center mt-3">


            <?php foreach (Posts() as $key => $value) { ?>

                <div class="col-12 col-md-4">
                    <a href="artigo.php?id=<?php echo $value['id']; ?>">
                        <div class="col-12">
                            <img class="img-fluid rounded" src="<?php echo $value['imagem']; ?>" alt="Capa homem de ferro - stark: a queda">
                            <h4 class="m-1"><strong><?php echo $value['titulo']; ?></strong></h4>
                            <p class="text-justify m-2"><?php echo substr($value['texto'], 0, 100) . '...'; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </section>
    </div>

</main>

<?php
include('../../templates/footer.php');
//Incluindo o rodapé
?>