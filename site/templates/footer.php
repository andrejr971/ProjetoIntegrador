<?php 
    $url = explode("/", $_SERVER['REQUEST_URI']);
       $resultado = in_array('autores', $url);
?>

<footer class="footer bg-dark">
        <div class="container">
            <div class="row p-3">
                <div class="col-4 col-md-2"><a href="#">Ficção Científica</a></div>
                <div class="col-4 col-md-2"><a href="#">Marvel</a></div>
                <div class="col-4 col-md-2"><a href="#">DC</a></div>
                <div class="col-4 col-md-2"><a href="#">LGBTQ+</a></div>
                <div class="col-4 col-md-2"><a href="#">Mangá</a></div>
                <div class="col-4 col-md-2"><a href="#">Anti-Heróis</a></div>
            </div>

            <div class="container">
                <div class="row justify-content-center p-3">
                    <img src="<?php echo !$resultado ? "" : "../../" ;?>img/logo_w.png" alt="Logotipo Parallel Universe">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <div class="row p-3">
                        <div class="col-4"><a href="#"><img src="<?php echo !$resultado ? "" : "../../" ;?>img/sociais/twitter.png" alt="Logotipo Twitter - Rodapé"></a></div>
                        <div class="col-4"><a href="#"><img src="<?php echo !$resultado ? "" : "../../" ;?>img/sociais/instagram.png" alt="Logotipo Instagram - Rodapé"></a></div>
                        <div class="col-4"><a href="#"><img src="<?php echo !$resultado ? "" : "../../" ;?>img/sociais/facebook.png" alt="Logotipo Facebook - Rodapé"></a></div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo !$resultado ? "" : "../../" ;?>js/funcoes.js"></script>
</body>

</html>