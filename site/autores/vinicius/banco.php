<?php
function Posts($aleatorio = 'não')
{
    $conteudo = [
        ['id' => 0, 'alt' => 'Capa do quadrinho do homem de ferro mostrando sua derrota', 'titulo' => 'Homem de Ferro - Stark: A Queda', 'imagem' => 'img/homem-de-ferro.jpg', 'texto' => 'Tony stark ludibriou norman osborn, o humilhou ao vivo na televisão e manteve a salvo o banco de dados que lista as identidades secretas de super-humanos. Mas, ao fazer isso, ele perdeu tudo: sua armadura, seus poderes e até mesmo sua mente. Agora, totalmente indefeso, em coma e com sua vida desmantelada, tony dependerá de seus últimos traços de determinação e um grupo de amigos – incluindo thor, capitão américa, máquina de combate, doutor estranho, pepper potts e maria hill – para impedir que ele perca tudo.'],
        ['id' => 1, 'alt' => 'Capa do quadrinho do deadpool mostrando armas apontadas para ele', 'titulo' => 'Deadpool #06', 'imagem' => 'img/deadpool.jpg', 'texto' => 'Alguém roubou o coração do Comediante Carmim. literalmente! Para ajudar a descobrir o que aconteceu, Deadpool contrata a única investigadora particular durona o suficiente para um caso como esse - Jessica Jones! E ainda: Deadpool versus sanguessugas!'],
        ['id' => 2, 'alt' => 'Capa do quadrinho wakanda para semrpe mostra duas guerreiras juntas com o homem aranha', 'titulo' => 'Wakanda para Sempre', 'imagem' => 'img/wakanda.jpg', 'texto' => 'As maiores guerreiras de Wakanda - Okoye, Ayo e Aneka - embarcam numa missão ao redor do globo para proteger seu amado reino a qualquer custo. Após descobrir que uma ameaça de sua terra natal está causando problemas em Nova York, elas decidem entrar em ação - com ou sem o rei ao seu lado!'],
        ['id' => 3, 'alt' => 'Capa do quadrinho agentes da shield mostrando Phil Coulson e alguns de seus agentes segurando armas', 'titulo' => 'Agentes da SHIELD - Tiro Perfeito', 'imagem' => 'img/shield.jpg', 'texto' => 'O agente especial Phil Coulson e sua equipe da S.H.I.E.L.D. reúnem os melhores e mais brilhantes operativos para confrontar, combater e debelar ameaças que estão além do escopo de qualquer força de manutenção da paz convencional! Coulson os agentes Leo Fitz, Melinda May e Jemma Simmons encaram um Heimdall possuído! Simmons age disfarçada na escola da Miss Marvel em New Jersey! Ao se deparar com um ataque de terroristas místicos, Coulson e o Homem-Aranha precisam levar uma equipe de assalto à mansão do Doutor Estranho! A S.H.I.E.L.D. revela sua mais secreta agente: Sue Richards, a Mulher Invisível! E a superciência da equipe se mostra inútil quando uma ameaça sobrenatural mostra sua cara — felizmente, a Feiticeira Escarlate pode ser capaz de ajudar! Mas será que a surrada e alquebrada equipe de Coulson terá forças para proteger a Terra da Praga Acéfala? Bem-vindo ao Oitavo Nível! Este volume de 148 páginas reúne as edições 1 a 6 de S.H.I.E.L.D. Escrito por Mark Waid e ilustrado por Carlos Pacheco, Humberto Ramos, Alan Davis, Chris Sprouse, Mike Choi e Paul Renaud.'],
        ['id' => 4, 'alt' => 'Capa do quadrinho o velho logando mostrando logan e seu aliado o justiceiro', 'titulo' => 'O Velho Logan #37', 'imagem' => 'img/velho-logan.jpg', 'texto' => 'Logan continua em busca de uma cura para seu cada vez pior fator de cura. Dessa vez, ele procura ajuda com seus antigos aliados da Tropa Alfa, mas no caminho surge uma misteriosa ameaça alienígena! E ainda: Um conto do Logan - e do Justiceiro - nas Terras Desoladas.'],
        ['id' => 5, 'alt' => 'Capa do quadrinho o retorno de wolverine mostrando wolverine e a equipe dos vingadores', 'titulo' => 'O Retorno de Wolverine #04', 'imagem' => 'img/wolverine.jpg', 'texto' => 'A equipe de ex-Vingadores do Homem de Ferro chega ao grande banco de dados do Senhor Sinistro, que contém o código genético de todos os habitantes do planeta! Mas o que isso tem a ver com o misterioso ressurgimento do Wolverine? E ainda: um conto do passado do mutante, em uma operação de resgate!']
    ];

    if ($aleatorio == 'aleatorio') {
        shuffle($conteudo);
        return $conteudo;
    } else {
        return $conteudo;
    }
}

if (isset($_GET['id'])) {
    foreach (Posts() as $key => $value) {
        if ($value['id'] == $_GET['id']) {
            $titulo = $value['titulo'];
            $imagem = $value['imagem'];
            $texto = $value['texto'];
        }
    }
}
