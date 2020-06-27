<?php
include('../../templates/header.php');
include('../../php/banco.php');
?>
<div role="main" class="container">
  <div class="w-100">
    <img src="img/header.jpg" class="d-block w-100 img-bordas" alt="Imagem com os integrantes da liga da justiça">
  </div>
  <main class="m-1">
    <article aria-label="DC Comics">
      <h1 class="titulo">DC Comics</h1>
      <p>DC Comics é uma das grandes empresas norte-americanas de histórias em quadrinhos. A sigla DC significa
        Detective Comics, o título de uma história em quadrinhos de Batman, publicada em 1939. Os super-heróis criados
        pela DC Comics fazem parte do chamado "Universo DC", que consagrou Batman e Superman, os personagens mais
        famosos criados pela DC Comics. Outros personagens representativos da editora são a Mulher Maravilha, Flash,
        Lanterna Verde, Aquaman, dentre outros.</p>
      <div class="row">
        <div class="w-100">
          <h2 class="titulo">Notícias</h2>
        </div>
        <div class="col-12 col-md-4 col-lg-4 mb-2">
          <div class="card">
            <a href="#" data-toggle="modal" data-target="#new1" role="dialog"
              aria-label="Abrir modal: notícia Esquadrão Suicida | James Gunn revela foto do roteiro e indica trilha sonora">
              <img src="img/new0.jpg" class="card-img-top w-100" alt="Imagem do filme esquadrão suicida">
              <div class="card-body">
                <p class="card-text">Esquadrão Suicida | James Gunn revela foto do roteiro e indica trilha sonora</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4 mb-2">
          <div class="card">
            <a href="#" data-toggle="modal" data-target="#new2"
              aria-label="Abrir modal: notícia DC divulga nova linha do tempo oficial">
              <img src="img/new1.jpg" class="card-img-top w-100" alt="Imagem da amazona mulher maravilha">
              <div class="card-body">
                <p class="card-text">DC divulga nova linha do tempo oficial</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4 mb-2">
          <div class="card">
            <a href="#" data-toggle="modal" data-target="#new3"
              aria-label="Abrir modal: Descoberto o possível novo Batman da DC Comics">
              <img src="img/new2.jpg" class="card-img-top w-100" alt="Imagem do cabaleiro das trevas - Batman">
              <div class="card-body">
                <p class="card-text">Descoberto o possível novo Batman da DC Comics</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </article>
  </main>
  <section class="row mb-2 secao1">
    <div class="w-100">
      <h2 class="titulo">Personagens Famosos</h2>
    </div>
    <div class="col-2">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="bat-tab" data-toggle="pill" href="#bat" role="tab" aria-controls="bat"
          aria-selected="true">Batman</a>
        <a class="nav-link" id="ww-tab" data-toggle="pill" href="#ww" role="tab" aria-controls="ww"
          aria-selected="false">Mulher Maravilha</a>
        <a class="nav-link" id="super-tab" data-toggle="pill" href="#super" role="tab" aria-controls="super"
          aria-selected="false">Superman</a>
        <a class="nav-link" id="outros-tab" data-toggle="pill" href="#outros" role="tab" aria-controls="outros"
          aria-selected="false">Outros</a>
      </div>
    </div>
    <div class="col">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="bat" role="tabpanel" aria-labelledby="bat-tab">
          <div class="row">
            <?php
                        for ($cont = 0; $cont < 3; $cont++) {
                            ?>
            <div class="col-4">
              <a href="personagens.php?personagem=<?php echo "Batman$cont"; ?>"
                aria-label="Link para da página a hq <?php echo $bancoDC["Batman$cont"]['nome']; ?>">
                <img src="<?php echo $bancoDC["Batman$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas"
                  alt="<?php echo $bancoDC["Batman$cont"]['alt']; ?>">
                <h3 class="titulo3"><?php echo $bancoDC["Batman$cont"]['nome']; ?></h3>
              </a>
            </div>

            <?php
                        }
                        ?>
          </div>
        </div>
        <div class="tab-pane fade" id="ww" role="tabpanel" aria-labelledby="ww-tab">
          <div class="row">
            <?php
                        for ($cont = 0; $cont < 3; $cont++) {
                            ?>
            <div class="col-4">
              <a href="personagens.php?personagem=<?php echo "MulherMaravilha$cont"; ?>"
                aria-label="Link para da página a hq <?php echo $bancoDC["MulherMaravilha$cont"]['nome']; ?>">
                <img src="<?php echo $bancoDC["MulherMaravilha$cont"]['caminho']; ?>"
                  class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["MulherMaravilha$cont"]['alt']; ?>">
                <h3 class="titulo3"><?php echo $bancoDC["MulherMaravilha$cont"]['nome']; ?></h3>
              </a>
            </div>

            <?php
                        }
                        ?>
          </div>
        </div>
        <div class="tab-pane fade" id="super" role="tabpanel" aria-labelledby="super-tab">
          <div class="row">
            <?php
                        for ($cont = 0; $cont < 3; $cont++) {
                            ?>
            <div class="col-4">
              <a href="personagens.php?personagem=<?php echo "Superman$cont"; ?>"
                aria-label="Link para da página a hq <?php echo $bancoDC["Superman$cont"]['nome']; ?>">
                <img src="<?php echo $bancoDC["Superman$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas"
                  alt="<?php echo $bancoDC["Superman$cont"]['alt']; ?>">
                <h3 class="titulo3"><?php echo $bancoDC["Superman$cont"]['nome']; ?></h3>
              </a>
            </div>

            <?php
                        }
                        ?>
          </div>
        </div>
        <div class="tab-pane fade" id="outros" role="tabpanel" aria-labelledby="outros-tab">
          <div class="row">
            <?php
                        for ($cont = 0; $cont < 3; $cont++) {
                            ?>
            <div class="col-4">
              <a href="personagens.php?personagem=<?php echo "Outros$cont"; ?>"
                aria-label="Link para da página a hq <?php echo $bancoDC["Outros$cont"]['nome']; ?>">
                <img src="<?php echo $bancoDC["Outros$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas"
                  alt="<?php echo $bancoDC["Outros$cont"]['alt']; ?>">
                <h3 class="titulo3"><?php echo $bancoDC["Outros$cont"]['nome']; ?></h3>
              </a>
            </div>

            <?php
                        }
                        ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="secao2 mb-2">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="bat2-tab" data-toggle="pill" href="#bat2" role="tab" aria-controls="bat2"
          aria-selected="true">Batman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ww2-tab" data-toggle="pill" href="#ww2" role="tab" aria-controls="ww2"
          aria-selected="false">Mulher Maravilha</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="super2-tab" data-toggle="pill" href="#super2" role="tab" aria-controls="super2"
          aria-selected="false">Superman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="outros2-tab" data-toggle="pill" href="#outros2" role="tab" aria-controls="outros2"
          aria-selected="false">Outros</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="bat2" role="tabpanel" aria-labelledby="bat-tab">
        <div class="row">
          <?php
                    for ($cont = 0; $cont < 3; $cont++) {
                        ?>
          <div class="col-12 col-sm-4 col-md-4">
            <a href="personagens.php?personagem=<?php echo "Batman$cont"; ?>">
              <img src="<?php echo $bancoDC["Batman$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas"
                alt="<?php echo $bancoDC["Batman$cont"]['alt']; ?>">
              <h3 class="titulo3"><?php echo $bancoDC["Batman$cont"]['nome']; ?></h3>
            </a>
          </div>

          <?php
                    }
                    ?>
        </div>
      </div>
      <div class="tab-pane fade" id="ww2" role="tabpanel" aria-labelledby="ww-tab">
        <div class="row">
          <?php
                    for ($cont = 0; $cont < 3; $cont++) {
                        ?>
          <div class="col-12 col-sm-4 col-md-4">
            <a href="personagens.php?personagem=<?php echo "MulherMaravilha$cont"; ?>">
              <img src="<?php echo $bancoDC["MulherMaravilha$cont"]['caminho']; ?>"
                class="card-img-top w-100 img-bordas" alt="<?php echo $bancoDC["MulherMaravilha$cont"]['alt']; ?>">
              <h3 class="titulo3"><?php echo $bancoDC["MulherMaravilha$cont"]['nome']; ?></h3>
            </a>
          </div>

          <?php
                    }
                    ?>
        </div>
      </div>
      <div class="tab-pane fade" id="super2" role="tabpanel" aria-labelledby="super-tab">
        <div class="row">
          <?php
                    for ($cont = 0; $cont < 3; $cont++) {
                        ?>
          <div class="col-12 col-sm-4 col-md-4">
            <a href="personagens.php?personagem=<?php echo "Superman$cont"; ?>">
              <img src="<?php echo $bancoDC["Superman$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas"
                alt="<?php echo $bancoDC["Superman$cont"]['alt']; ?>">
              <h3 class="titulo3"><?php echo $bancoDC["Superman$cont"]['nome']; ?></h3>
            </a>
          </div>

          <?php
                    }
                    ?>
        </div>
      </div>
      <div class="tab-pane fade" id="outros2" role="tabpanel" aria-labelledby="outros-tab">
        <div class="row">
          <?php
                    for ($cont = 0; $cont < 3; $cont++) {
                        ?>
          <div class="col-12 col-sm-4 col-md-4">
            <a href="personagens.php?personagem=<?php echo "Outros$cont"; ?>">
              <img src="<?php echo $bancoDC["Outros$cont"]['caminho']; ?>" class="card-img-top w-100 img-bordas"
                alt="<?php echo $bancoDC["Outros$cont"]['alt']; ?>">
              <h3 class="titulo3"><?php echo $bancoDC["Outros$cont"]['nome']; ?></h3>
            </a>
          </div>

          <?php
                    }
                    ?>
        </div>
      </div>
    </div>
  </section>
</div>

<!--Modal !-->
<div class="modal fade" id="new1" tabindex="-1" role="dialog" aria-labelledby="new1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Esquadrão Suicida | James Gunn revela foto do roteiro e indica trilha sonora</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/new0.jpg" class="d-block w-50 offset-sm-3 mb-3 img-bordas" alt="">
        <p class="text-justify">O diretor James Gunn compartilhou em seu Instagram uma foto do roteiro de Esquadrão
          Suicida, já criando expectativas para a trilha sonora do longa usando a frase da música "Blitzkrieg Bop", do
          Ramones.</p>
        <p class="text-justify">Nas redes sociais, a atriz Mayling Ng compartilhou uma foto ao lado de Peter Capaldi, na
          qual os dois integrantes do elenco são vistos no que parece ser um estúdio, indicando a proximidade do início
          de filmagens.</p>
        <p class="text-justify">O novo Esquadrão Suicida deve se inspirar nas HQs do grupo na década de 1980, escritas
          por Jon Ostrander e Kim Yale e deve contar com um novo elenco de vilões. O lançamento é previsto para em 6 de
          agosto de 2021.</p>
        <p class="text-justify"><strong>Referência</strong></p>
        <p class="text-justify"><a
            href="https://www.omelete.com.br/dc-comics/esquadrao-suicida-james-gunn-revela-foto-do-roteiro-e-indica-trilha-sonora"
            target="_blank">
            https://www.omelete.com.br/dc-comics/esquadrao-suicida-james-gunn-revela-foto-do-roteiro-e-indica-trilha-sonora</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="new2" tabindex="-1" role="dialog" aria-labelledby="new2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">DC divulga nova linha do tempo oficial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/new1.jpg" class="d-block w-50 offset-sm-3 mb-3 img-bordas" alt="">
        <p class="text-justify">Mudança estabelece Mulher-Maravilha como primeira heroína da editora.</p>
        <p class="text-justify">Durante a New York Comic-Con 2019, a DC anunciou que lançará uma nova linha do tempo
          oficial que encaixe melhor as histórias da editora. Dan DiDio, editor-executivo da DC, explicou melhor as
          mudanças, que estabelecem a Mulher-Maravilha como ponto de partida para o universo heroico da editora.</p>
        <p class="text-justify">De acordo com DiDio, a chegada de Diana aos Estados Unidos, antes da Segunda Guerra
          Mundial, estabelece a camada Primeira Geração de Super-Heróis. A segunda, chamada de Era Espacial, é marcada
          pela primeira aparição do Superman. A Terceira Geração é a Era das Crises e aborda as histórias publicadas
          entre Crise nas Infinitas Terras, publicada originalmente em 1985, e Ponto de Ignição, de 2011. Atualmente, a
          editora está na fase Flashpoint.</p>
        <p class="text-justify">Vale lembrar que a minissérie Doomsday Clock, de Geoff Johns e Gary Frank, mostra a
          inclusão do universo Watchmen, criado por Alan Moore, ao cânone oficial da DC. Na história, o Batman investiga
          as constantes mudanças nos multiversos da editora, que podem ou não ter o envolvimento do Doutor
          Manhattan.Especula-se que, ao fim das doze edições, em dezembro, a nova timelineestará plenamente
          estabelecida.</p>
        <p class="text-justify"><strong>Referência</strong></p>
        <p class="text-justify"><a href="https://www.omelete.com.br/dc-comics/dc-divulga-nova-timeline-oficial"
            target="_blank">
            https://www.omelete.com.br/dc-comics/dc-divulga-nova-timeline-oficial</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="new3" tabindex="-1" role="dialog" aria-labelledby="new3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Descoberto o possível novo Batman da DC Comics</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="img/new2.jpg" class="d-block w-50 offset-sm-3 mb-3 img-bordas" alt="">
        <p class="text-justify">A nova era do Batman na DC pode trazer mudanças significativas. Rumores recentes apontam
          para uma mudança na identidade do herói, que deixará de ser Bruce Wayne para ser Luke Fox, o atual Batwing.
        </p>
        <p class="text-justify">Para quem não conhece, Luke Fox é filho de Lucius Fox, antigo colaborador das Empresas
          Wayne e grande aliado do Batman. Um gênio, o personagem acabou se tornando um membro importante da “família
          Batman” virando o herói Batwing. Porém, ao que tudo indica, seu papel na DC deve aumentar em breve.</p>
        <p class="text-justify"><strong>Referência</strong></p>
        <p class="text-justify"><a
            href="https://observatoriodocinema.bol.uol.com.br/artigos/2019/10/descoberto-o-possivel-novo-batman-da-dc-comics"
            target="_blank">
            https://observatoriodocinema.bol.uol.com.br/artigos/2019/10/descoberto-o-possivel-novo-batman-da-dc-comicsl</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<?php
include('../../templates/footer.php');
?>