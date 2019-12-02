<?php
include('templates/header.php');
include('php/banco.php');
?>
<div class="container">
    <header>
        <div class="row">
            <div class="col">
                <a href="#" data-toggle="modal" data-target="#noticia">
                    <img src="img/home/slide1.jpg" class="d-block w-100 img-bordas" alt="">
                    <h2 class="titulo1">Novo yearbook da Chiaroscuro Studios abordará os super-heróis brasileiros</h2>
                </a>
            </div>
            <div class="col-md-5 col-slide-right">
                <div class="row">
                    <div class="col">
                        <a href="#" class="link-slide" data-toggle="modal" data-target="#new1">
                            <div class="row">
                                <div class="col-4">
                                    <img src="autores/andre/img/new0.jpg" class="d-block w-100 img-bordas" alt="">
                                </div>
                                <div class="col">
                                    <h2 class="titulo2-news">Esquadrão Suicida | James Gunn revela foto do roteiro e indica trilha sonora</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-100">
                    <hr>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="#" class="link-slide" data-toggle="modal" data-target="#new3">
                            <div class="row">
                                <div class="col-4">
                                    <img src="autores/andre/img/new2.jpg" class="d-block w-100 img-bordas" alt="">
                                </div>
                                <div class="col">
                                    <h2 class="titulo2-news">Descoberto o possível novo Batman da DC Comics</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-100">
                    <hr>
                </div>
            </div>
            <div class="w-100">
                <hr>
            </div>
        </div>

    </header>
    <main class="row">
        <article class="col-12 col-sm-12 col-md-12 col-lg-8">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="populares" data-toggle="tab" href="#popu" role="tab" aria-controls="populares" aria-selected="true">Populares</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="recomendados" data-toggle="tab" href="#rec" role="tab" aria-controls="recomendados" aria-selected="false">Recomendações</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="popu" role="tabpanel" aria-labelledby="populares">
                    <div class="row">
                        <?php
                        foreach ($bancoHome as $id => $nomes) {
                            ?>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-1 mt-1">
                                <a href="<?php echo $bancoHome[$id]['end']; ?>">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="<?php echo $bancoHome[$id]['caminho']; ?>" class="d-block w-100 img-bordas" alt="<?php echo $bancoHome[$id]['alt']; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 class="titulo3-pop"><?php echo $bancoHome[$id]['nome']; ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="rec" role="tabpanel" aria-labelledby="recomendados">
                    <div class="row">
                        <?php
                        for ($i = 0; $i <= 5; $i++) {
                            $contRand[] = $i;
                        }
                        shuffle($contRand);
                        foreach ($contRand as $contador) {
                            ?>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-1 mt-1">
                                <a href="<?php echo $bancoHome[$contador]['end']; ?>">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="<?php echo $bancoHome[$contador]['caminho']; ?>" class="d-block w-100 img-bordas" alt="<?php echo $bancoHome[$id]['alt']; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 class="titulo3-pop"><?php echo $bancoHome[$contador]['nome']; ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </article>

        <aside class="col-sm-12 col-md-12 col-lg-4">
            <div class="w-100 linhaHr">
                <hr>
            </div>
            <h2 class="titulo1">Últimos Reviews</h2>
            <div class="row m-1">
                <div class="col">
                    <a href="#" class="link-slide" data-toggle="modal" data-target="#new2">
                        <div class="row m-1">
                            <div class="col-12 col-sm-6 col-md-6">
                                <img src="autores/andre/img/new1.jpg" class="d-block w-100 img-bordas" alt="">
                            </div>
                            <div class="col">
                                <h3 class="titulo2-news">DC divulga nova linha do tempo oficial</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100 linhaHr">
                <hr>
            </div>
            <div class="row m-1">
                <div class="col">
                    <a href="#" class="link-slide" data-toggle="modal" data-target="#new1">
                        <div class="row m-1">
                            <div class="col-12 col-sm-6 col-md-6">
                                <img src="autores/andre/img/new0.jpg" class="d-block w-100 img-bordas" alt="">
                            </div>
                            <div class="col">
                                <h3 class="titulo2-news">Esquadrão Suicida | James Gunn revela foto do roteiro e indica trilha sonora</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100 linhaHr">
                <hr>
            </div>
            <div class="row m-1">
                <div class="col">
                    <a href="#" class="link-slide" data-toggle="modal" data-target="#new3">
                        <div class="row m-1">
                            <div class="col-12 col-sm-6 col-md-6">
                                <img src="autores/andre/img/new2.jpg" class="d-block w-100 img-bordas" alt="">
                            </div>
                            <div class="col">
                                <h3 class="titulo2-news">Descoberto o possível novo Batman da DC Comics</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-100 linhaHr">
                <hr>
            </div>
        </aside>
    </main>

    <section class="news">
        <div class="w-100">
            <hr>
        </div>
        <h2>Últimos Artigos</h2>
        <div class="row m-1">
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-md-12 col-lg-6">
                        <a href="autores/wagner/manga.php?manga=kimetsu">
                            <img src="autores/wagner/img/kimetsu2.jpg" class="d-block w-100 img-bordas" alt="Capa do Kimersu no yaiba">
                        </a>
                    </div>
                    <div class="col">
                        <a href="autores/wagner/manga.php?manga=kimetsu">
                            <h3 class="titulo2-news">Kimetsu no Yaiba</h3>
                        </a>
                        <p class="text-justify">Com o fim da primeira temporada de Demon Slayer (Kimetsu no Yaiba), muitos fãs procuraram o mangá pra saber o que irá acontecer na história, mas outros preferem esperar por novos episódios do anime...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-md-12 col-lg-6">
                        <a href="autores/wagner/manga.php?manga=boku">
                            <img src="autores/wagner/img/boku0.jpg" class="d-block w-100 img-bordas" alt="Capa do Boku no hero">
                        </a>
                    </div>
                    <div class="col">
                        <a href="autores/wagner/manga.php?manga=boku">
                            <h3 class="titulo2-news">Boku no Hero Academy</h3>
                        </a>
                        <p class="text-justify">A informação surgiu já que foram revelados os títulos dos próximos episódios da quarta temporada da adaptação para série anime Boku no Hero Academia, de Kohei Horikoshi, e com eles veio a informação de que o 4ª episódio não será...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-1">
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-md-12 col-lg-6">
                        <a href="autores/henrique/personagens.php?persona=wolverine">
                            <img src="autores/henrique/img/img04.jpg" class="d-block w-100 img-bordas" alt="Capa do Wolverine">
                        </a>
                    </div>
                    <div class="col">
                        <a href="autores/henrique/personagens.php?persona=wolverine">
                            <h3 class="titulo2-news">Wolverine</h3>
                        </a>
                        <p class="text-justify">foi revelado que ele nasceu no Canadá com poderes mutantes no século 19, com garras de ossos que saltam de suas mãos e um elevado fator de cura que o permite sobreviver aos piores ferimentos e faz com que envelheça lentamente. Batizado de James Howlett...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row m-1">
                    <div class="col-md-12 col-lg-6">
                        <a href="autores/henrique/personagens.php?persona=mulher_gato">
                            <img src="autores/henrique/img/img01.jpg" class="d-block w-100 img-bordas" alt="Capa da Mulher Gato">
                        </a>
                    </div>
                    <div class="col">
                        <a href="autores/henrique/personagens.php?persona=mulher_gato">
                            <h3 class="titulo2-news">Mulher Gato</h3>
                        </a>
                        <p class="text-justify">Sua mãe, Maria Kyle, era dada à putaria e à agressividade, batia nela e na sua irmã mais nova, Magdalena, quando eram pequenas. Não satisfeita pela porrada que dava às duas garotas...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- MODAL !-->
<div class="modal fade" id="noticia" tabindex="-1" role="dialog" aria-labelledby="noticia" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo yearbook da Chiaroscuro Studios abordará os super-heróis brasileiros</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="img/home/slide1.jpg" class="d-block w-100 img-bordas" alt="">
                <p class="text-justify">Os yearbooks da Chiaroscuro Studios já está se tornando uma tradição ao final de cada ano.</p>
                <p class="text-justify">Desde 2016, uma nova edição é lançada apresentando os talentos dos artistas agenciados pelo estúdio, e passou a ser temático. Em 2017, foi uma graphic novel chamada Dias de Horror e, em 2018, um especial sobre lendas brasileiras. Agora, em 2019 abordar os super-heróis brasileiros.</p>
                <p class="text-justify">Grande Almanaque dos Super-heróis Brasileiros (formato 21 cm x 31 cm, 140 páginas, capa dura) será uma enciclopédia com mais de 200 heróis dos quadrinhos brasileiros reimaginados pelos quadrinhistas do estúdio.</p>
                <p class="text-justify">O projeto já está disponível para apoios no Catarse em diferentes planos e diversas recompensas, que vão desde autógrafos até sketches de artistas e entradas na CCXP, onde ocorrerá o lançamento do livro.</p>
                <p class="text-justify">Além de novos designs criados pelos artistas da Chiaroscuro Studios para 57 desses super-heróis, a edição trará verbetes explicativos com informações sobre os personagens e seus criadores.</p>
                <p class="text-justify">Os textos e a pesquisa são do editor Franco de Rosa.</p>
                <p class="text-justify">Os artistas participantes são Adriana Melo, Adriano Augusto, Adriano Di Benedetto, Alex Lins, Alex Shibao, Alisson Borges, Allan Jeff, Andrei Bressan, Anthony Marques, Breno Tamura, Bruno Oliveira, Cris Bolson, Cris Peter, Daniel HDR, Daniel Maia, Danilo Beyruth, Dijjo Lima, Diogenes Neves, Douglas Franchin, Eber Ferreira, Eddy Barrows, Eduardo Pansica, Elton Thomasi, Felipe Watanabe, Giovanni Valletta, Ig Guara, Ivan Reis, Joe Prado, Jonas Trindade, José Luis, Julio Brilha, Julio Ferreira, Leonardo Romero, Lucas Werneck, Marcelo Costa, Marcelo Di Chiara, Marcelo Maiolo, Marcio Fiorito, Marcio Hum, Marcio Menyz, Marcio Takara, Mauro Fodra, Mike Deodato, Natália Marques, Nuno Plati, Oclair Albert, Oren Junior, Paulo Siqueira, Péricles Júnior, RB Silva, Ricardo Jaime, Robson Rocha, Rod San, Rodney Buchemi, Rodrigo Spiga, Rogê Antônio, Ronan Cliquet, Ronilson Freire, Ruy José, Thony Silas, Wilton Santos, Yildiray Çinar e Zé Carlos.</p>
                <p class="text-justify"><strong>Referência</strong></p>
                <p class="text-justify"><a href="http://www.universohq.com/noticias/novo-yearbook-da-chiaroscuro-studios-abordara-os-super-herois-brasileiros/" target="_blank">
                        http://www.universohq.com/noticias/novo-yearbook-da-chiaroscuro-studios-abordara-os-super-herois-brasileiros/</a>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
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
                <img src="autores/andre/img/new0.jpg" class="d-block w-50 offset-sm-3 mb-3 img-bordas" alt="">
                <p class="text-justify">O diretor James Gunn compartilhou em seu Instagram uma foto do roteiro de Esquadrão Suicida, já criando expectativas para a trilha sonora do longa usando a frase da música "Blitzkrieg Bop", do Ramones.</p>
                <p class="text-justify">Nas redes sociais, a atriz Mayling Ng compartilhou uma foto ao lado de Peter Capaldi, na qual os dois integrantes do elenco são vistos no que parece ser um estúdio, indicando a proximidade do início de filmagens.</p>
                <p class="text-justify">O novo Esquadrão Suicida deve se inspirar nas HQs do grupo na década de 1980, escritas por Jon Ostrander e Kim Yale e deve contar com um novo elenco de vilões. O lançamento é previsto para em 6 de agosto de 2021.</p>
                <p class="text-justify"><strong>Referência</strong></p>
                <p class="text-justify"><a href="https://www.omelete.com.br/dc-comics/esquadrao-suicida-james-gunn-revela-foto-do-roteiro-e-indica-trilha-sonora" target="_blank">
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
                <img src="autores/andre/img/new1.jpg" class="d-block w-50 offset-sm-3 mb-3 img-bordas" alt="">
                <p class="text-justify">Mudança estabelece Mulher-Maravilha como primeira heroína da editora.</p>
                <p class="text-justify">Durante a New York Comic-Con 2019, a DC anunciou que lançará uma nova linha do tempo oficial que encaixe melhor as histórias da editora. Dan DiDio, editor-executivo da DC, explicou melhor as mudanças, que estabelecem a Mulher-Maravilha como ponto de partida para o universo heroico da editora.</p>
                <p class="text-justify">De acordo com DiDio, a chegada de Diana aos Estados Unidos, antes da Segunda Guerra Mundial, estabelece a camada Primeira Geração de Super-Heróis. A segunda, chamada de Era Espacial, é marcada pela primeira aparição do Superman. A Terceira Geração é a Era das Crises e aborda as histórias publicadas entre Crise nas Infinitas Terras, publicada originalmente em 1985, e Ponto de Ignição, de 2011. Atualmente, a editora está na fase Flashpoint.</p>
                <p class="text-justify">Vale lembrar que a minissérie Doomsday Clock, de Geoff Johns e Gary Frank, mostra a inclusão do universo Watchmen, criado por Alan Moore, ao cânone oficial da DC. Na história, o Batman investiga as constantes mudanças nos multiversos da editora, que podem ou não ter o envolvimento do Doutor Manhattan.Especula-se que, ao fim das doze edições, em dezembro, a nova timelineestará plenamente estabelecida.</p>
                <p class="text-justify"><strong>Referência</strong></p>
                <p class="text-justify"><a href="https://www.omelete.com.br/dc-comics/dc-divulga-nova-timeline-oficial" target="_blank">
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
                <img src="autores/andre/img/new2.jpg" class="d-block w-50 offset-sm-3 mb-3 img-bordas" alt="">
                <p class="text-justify">A nova era do Batman na DC pode trazer mudanças significativas. Rumores recentes apontam para uma mudança na identidade do herói, que deixará de ser Bruce Wayne para ser Luke Fox, o atual Batwing.</p>
                <p class="text-justify">Para quem não conhece, Luke Fox é filho de Lucius Fox, antigo colaborador das Empresas Wayne e grande aliado do Batman. Um gênio, o personagem acabou se tornando um membro importante da “família Batman” virando o herói Batwing. Porém, ao que tudo indica, seu papel na DC deve aumentar em breve.</p>
                <p class="text-justify"><strong>Referência</strong></p>
                <p class="text-justify"><a href="https://observatoriodocinema.bol.uol.com.br/artigos/2019/10/descoberto-o-possivel-novo-batman-da-dc-comics" target="_blank">
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
include('templates/footer.php');
?>