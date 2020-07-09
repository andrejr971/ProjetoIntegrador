<?php
include('../../templates/header.php');
include('../../php/banco.php');

isset($_GET['persona']) ? $escolha = $_GET['persona'] : header('Location: index.php');
?>

<div role="main" class="container">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <?php 
            foreach($bancoAnti as $key => $value) {
                if($escolha === $key) {
            ?>
        <li class="nav-item">
            <a class="nav-link active" id="pills-<?php echo $key; ?>-tab" data-toggle="pill" href="#<?php echo $key; ?>" role="tab" aria-selected="true"><?php echo $value['titulo']; ?> </a>
        </li>
        <?php
                } else {
            ?>
        <li class="nav-item">
            <a class="nav-link" id="pills-<?php echo $key; ?>-tab" data-toggle="pill" href="#<?php echo $key; ?>" role="tab" aria-controls="<?php echo $key; ?>" aria-selected="false"><?php echo $value['titulo']; ?></a>
        </li>
        <?php
                }
            }
        ?>
    </ul>
    <div class="tab-content" id="pills-tabContent" >
        <?php 
        foreach($bancoAnti as $key => $value) {
            if($escolha === $key) {
        ?>
        <div class="tab-pane fade show active" id="<?php echo $key; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $key; ?>-tab">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <img class="img-personagens" role="img" src="<?php echo $value['img1']; ?>" alt="<?php echo $value['alt1']; ?>">
                </div>
                <div class="col-12 col-sm-12 col-lg">
                    <h1><?php echo $value['titulo']; ?></h1>
                    <p class="text-justify" role="main"><?php echo $value['p1']; ?></p>
                    <p class="text-justify"><?php echo $value['p2']; ?></p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-sm-12 col-md-4 mb-3">
                    <img class="quadrinho img-personagens" src="<?php echo $value['img2']; ?>" alt="<?php echo $value['alt2']; ?>">
                </div>
                <div class="col-12 col-sm-12 col-lg">
                    <table class="table table-sm" role="grid">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">colocação </th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Data de publicação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a target="blank" href="<?php echo $value['tabela']['linha1']['link']; ?>"><?php echo $value['tabela']['linha1']['titulo']; ?></a></td>
                                <td><?php echo $value['tabela']['linha1']['ano']; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a target="blank" href="<?php echo $value['tabela']['linha2']['link']; ?>"><?php echo $value['tabela']['linha2']['titulo']; ?></a></td>
                                <td><?php echo $value['tabela']['linha2']['ano']; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a target="blank" href="<?php echo $value['tabela']['linha3']['link']; ?>"><?php echo $value['tabela']['linha3']['titulo']; ?></a></td>
                                <td><?php echo $value['tabela']['linha3']['ano']; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a target="blank" href="<?php echo $value['tabela']['linha4']['link']; ?>"><?php echo $value['tabela']['linha4']['titulo']; ?></a></td>
                                <td><?php echo $value['tabela']['linha4']['ano']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
            } else {
        ?>
        <div class="tab-pane fade show" id="<?php echo $key; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $key; ?>-tab">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <img class="img-personagens" src="<?php echo $value['img1']; ?>" alt="<?php echo $value['alt1']; ?>">
                </div>
                <div class="col-12 col-sm-12 col-lg">
                    <h1><?php echo $value['titulo']; ?></h1>
                    <p class="text-justify"><?php echo $value['p1']; ?></p>
                    <p class="text-justify"><?php echo $value['p2']; ?></p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-sm-12 col-md-4 mb-3">
                    <img class="quadrinho img-personagens" src="<?php echo $value['img2']; ?>" alt="<?php echo $value['alt2']; ?>">
                </div>
                <div class="col-12 col-sm-12 col-lg">
                    <table class="table table-sm">
                        <thead class="thead-dark" role="grid">
                            <tr>
                                <th scope="col">colocação </th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Data de publicação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a target="blank" href="<?php echo $value['tabela']['linha1']['link']; ?>"><?php echo $value['tabela']['linha1']['titulo']; ?></a></td>
                                <td><?php echo $value['tabela']['linha1']['ano']; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a target="blank" href="<?php echo $value['tabela']['linha2']['link']; ?>"><?php echo $value['tabela']['linha2']['titulo']; ?></a></td>
                                <td><?php echo $value['tabela']['linha2']['ano']; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a target="blank" href="<?php echo $value['tabela']['linha3']['link']; ?>"><?php echo $value['tabela']['linha3']['titulo']; ?></a></td>
                                <td><?php echo $value['tabela']['linha3']['ano']; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><a target="blank" href="<?php echo $value['tabela']['linha4']['link']; ?>"><?php echo $value['tabela']['linha4']['titulo']; ?></a></td>
                                <td><?php echo $value['tabela']['linha4']['ano']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
            }
        }
    ?>
    </div>
</div>
<?php
include('../../templates/footer.php');
?>
