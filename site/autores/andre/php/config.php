<?php
$perfil = [
    ['caminho' => 'img/perfil0.jpg', 'nome' => 'Batman', 'id' => 'Batman'],
    ['caminho' => 'img/perfil1.jpg', 'nome' => 'Mulher Maravilha', 'id' => 'MulherMaravilha'],
    ['caminho' => 'img/perfil2.jpg', 'nome' => 'Superman', 'id' => 'Superman'],
    ['caminho' => 'img/perfil3.jpg', 'nome' => 'Outros', 'id' => 'Outros']
];

if (isset($_GET['personagem'])) {
    $personagem = $_GET['personagem'];

    $arrayPersonagens = ['Batman', 'MulherMaravilha', 'Superman', 'Outros'];

    for ($i = 0; $i < count($arrayPersonagens); $i++) {
        $contRand[] = $i;
    }

    shuffle($contRand);

    for ($cont = 0; $cont < count($perfil); $cont++) {
        if ($perfil[$contRand[$cont]]['nome'] == $bancoDC[$personagem]['personagem']) {
            unset($perfil[$contRand[$cont]]);
            unset($contRand[$cont]);
        }
    }
} else if (isset($_GET['person'])) {
    $nome = $_GET['person'];
} else {
    header('Location: index.php');
}

?>