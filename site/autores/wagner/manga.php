<?php
if (!isset($_GET['manga'])) {
    header('Location: index.php');
} else {
    $manga = $_GET['manga'];
}

include('../../templates/header.php');
//Incluido o menu de navegação
include('../../php/banco.php');

?>

<main>
    <div class="container">
        <div class="row">

            <article class="col-12 col-md-9 col-lg-9">

                <img class=" mt-3 mx-auto d-block img-fluid rounded" src="<?php echo $bancoManga[$manga]['img1'] ?>" alt="imagem de Izuku Midoriya com Mirio Togata">

                <h1 class="text-center"><?php echo $bancoManga[$manga]['nome'] ?></h1>

                <div class="text-justify">
                    <p class="mt-2"><?php echo $bancoManga[$manga]['desc'] ?>
                </div>

                <div class="text-center">
                    <img class="mb-3 img-fluid rounded" src="<?php echo $bancoManga[$manga]['img0'] ?>" alt="imagem de All Might">
                    <img class="mb-3 img-fluid rounded" src="<?php echo $bancoManga[$manga]['img2'] ?>" alt="imagem de Izuku Midoriya">
                </div>
            </article>

            <aside class="col-12 col-md-3 col-lg-3">
                <h2 class="mt-1 text-center">Outros Links</h2>
                <div class="p-3 mb-2 bg-light text-dark rounded text-center">
                    <?php
                    $nomePerson =  $bancoManga[$manga];
                    shuffle($bancoManga);

                    $arrayMais = new ArrayIterator($bancoManga);

                    foreach (new LimitIterator($arrayMais, 0, 3) as $key => $value) {

                        if ($nomePerson == $arrayMais[$key]) {
                            unset($arrayMais[$key]);
                        } else {
                            ?>
                            <a href="<?php $_SERVER['PHP_SELF']; ?>?manga=<?php echo $bancoManga[$key]['end']; ?>">
                                <img class="rounded img-fluid mt-3" src="<?php echo $bancoManga[$key]['caminho']; ?>" alt="<?php echo $bancoManga[$key]['alt']; ?>">
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </aside>

        </div>
    </div>
</main>

<?php
include('../../templates/footer.php');
//Incluindo o rodapé
?>