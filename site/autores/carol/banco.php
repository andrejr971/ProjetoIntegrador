<?php
function Posts($aleatorio = 'não')
{
    $conteudo = [
        ['id' => 0, 'titulo' => 'HQ Amor é Amor faz homenagem as vitimas do ataque À boate Pulse', 'imagem' => 'img/noticia1.jpg', 'texto' => 'No dia 12 de junho de 2016, 50 pessoas perderam a vida, e 53 ficaram feridas em um ataque a boate Pulse em Orlando, nos EUA onde seu público era em sua maioria LGBTQ+. Sendo assim, foi considerado um dos piores massacres da história do país. após a tragédia o quadrinista Marc Andreyko pensou em uma forma de se solidarizar com amigos e familiares das vítimas, foi aí que criou o Livro Amor é Amor. Sua iniciativa despertou a solidariedade de muitos nomes como Matt Bommer, J.K Rowling, PattonOswalt. O livro chegou no Brasil em 2017, nos EUA foi lançado no fim de 2016, e até então uma quantidade considerável já foi arrecadada para o fundo Equality Florida.'],
        ['id' => 1, 'titulo' => 'O manga LGBT My Brother’s Husband virou um live-action.', 'imagem' => 'img/noticia2.jpg', 'texto' => 'My brother’s husband (em japonês: Otōto no Otto) é um manga escrito e ilustrado por Gengoroh Tagame e publicada na revista Monthly Action pela editora Futabasha. Quando um casal de Tókio chamados Yaichi e Natsuki se divorciaram, fizeram um acordo que Yaichi ficaria com a guarda da filha deles, Kana. Essa decisão fez com que Yaichi ficasse um homem japonês mais sofisticado e moderno. Mas essa não é a história toda, Yaichi tem sua parcela de preconceitos culturais, ou assim parece quando um canadense sorridente e parecido com um urso chega à sua porta e anuncia que ele, Mike Flanagan, é o viúvo seu irmão do gêmeo gay de Yaichi, Ryoji. A trama fez muito sucesso no japão, um país onde muitos ainda tem vergonha de se assumir como gays devido a cultura.'],
        ['id' => 2, 'titulo' => 'Boruto – Roteirista Fala Sobre Representatividade Lgbt Nos Mangás E Animes!', 'imagem' => 'img/noticia3.jpg', 'texto' => 'O artista foi ao Twitter: Amar alguém é natural, e você não precisa necessariamente de uma razão para retratar algo que é parte da natureza, continuou ele. Você não ficaria incomodado se alguém lhe dissesse para não escrever personagens héteros, porque não há razão para eles serem héteros? Isso me incomodaria, afinal, mesmo pondo de lado a orientação sexual, você estabelece os personagens por meio de detalhes sobre eles.']
    ];

    if ($aleatorio == 'aleatorio') {
        shuffle($conteudo);
        return $conteudo;
    } else {
        return $conteudo;
    }
}

if (!isset($_GET['id'])) {
    $_GET['id'] = 1;
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


