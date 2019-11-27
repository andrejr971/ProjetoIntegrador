<?php
if (!isset($_GET['personagem'])) {
    header('Location: index.php');
}
include('../../templates/header.php');
include('../../php/banco.php');
include('php/config.php');
?>
<div role="main" class="container">
    <main class="row">
        <article class="col-lg-6">
            <h1 class="titulo"><?php echo $bancoDC[$personagem]['nome']; ?></h1>
            <div class="w-100">
                <img src="<?php echo $bancoDC[$personagem]['caminho']; ?>" class="img-personagens img-bordas" alt="<?php echo $bancoDC[$personagem]['alt']; ?>">
                <h2 class="escritor">Autor: <?php echo $bancoDC[$personagem]['escritor']; ?></h2>
            </div>
            <p><?php echo $bancoDC[$personagem]['desc']; ?></p>
        </article>
        <aside class="col-lg-6">
            <div class="row bg-light img-bordas mb-2">
                <div class="w-100">
                    <h2 class="titulo m-1">Vaja Também</h2>
                </div>
                <?php
                $nomePerson = $bancoDC[$personagem]['nome'];
                shuffle($bancoDC);

                $arrayMais = new ArrayIterator($bancoDC);

                foreach (new LimitIterator($arrayMais, 0, 4) as $key => $value) {

                    if ($nomePerson == $arrayMais[$key]['nome']) {
                        unset($arrayMais[$key]);
                    } else {
                        ?>
                        <div class="col-6 mb-2 mt-2">
                            <a href="<?php $_SERVER['PHP_SELF']; ?>?personagem=<?php echo $bancoDC[$key]['key']; ?>">
                                <img src="<?php echo $bancoDC[$key]['caminho']; ?>" class="w-100 img-bordas" alt="<?php echo $bancoDC[$key]['alt']; ?>">
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </aside>
    </main>
    <!-- <section class="row mt-2">
        <div class="w-100">
            <h2 class="titulo">Personagens</h2>
        </div>
        <?php
        foreach ($perfil as $key => $value) {
            ?>
            <div class="col-12 col-lg-4">
                <a href="personagens2.php?person=<?php echo $perfil[$key]['id']?>" class="hoverPerson">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-2 col-md-2">
                                <img src="<?php echo $perfil[$key]['caminho']; ?>" class="img-person card-img w-100 m-3" alt="">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title tituloCard"><?php echo $perfil[$key]['nome']; ?></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
        <?php
        }

        ?>
    </section> -->
</div>

<?php
include('../../templates/footer.php');
?>