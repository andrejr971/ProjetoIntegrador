<?php
include('../../templates/header.php');
include('../../php/banco.php');
include('php/config.php');

?>
<div role="main" class="container">
    <main class="row">
        <article class="col-lg-6">
            <h1 class="titulo"><?php echo $nome; ?></h1>
            <!-- <div class="w-100">
                <img src="<?php echo $bancoDC[$personagem]['caminho']; ?>" class="img-personagens img-bordas" alt="<?php echo $bancoDC[$personagem]['alt']; ?>">
                <h2 class="escritor">Autor: <?php echo $bancoDC[$personagem]['escritor']; ?></h2>
            </div>
            <p><?php echo $bancoDC[$personagem]['desc']; ?></p> -->
        </article>
    </main>
</div>

<?php
include('../../templates/modalHome.php');
include('../../templates/footer.php');
?>