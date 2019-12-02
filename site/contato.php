<?php
include('templates/header.php');
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <form class="col-md-8 m-3" method="POST">
                <section>
                    <h2 class="text-center">Contato</h2>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome...">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email...">
                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="textarea">Mensagem</label>
                        <textarea class="form-control" id="textarea" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviado">Enviar</button>
                </section>
            </form>

            <div class="logo-contato col-md-2 align-middle mt-3">
                <div class="row justify-content-center mt-3">
                    <img src="<?php echo !$resultado ? "" : "../../"; ?>img/logo.png" alt="Logotipo Parallel Universe">
                    <p class="mt-3 lead text-center">Idealizado por: André, Caio, Carol, Henrique, Vinicius e Wagner</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('templates/footer.php');
//Incluindo o rodapé
?>