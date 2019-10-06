<?php
$perfil = [
    ['caminho' => 'img/perfil0.jpg', 'nome' => 'Batman'],
    ['caminho' => 'img/perfil1.jpg', 'nome' => 'Mulher Maravilha'],
    ['caminho' => 'img/perfil2.jpg', 'nome' => 'Superman'],
    ['caminho' => 'img/perfil3.jpg', 'nome' => 'Flash']
];

$personagem = $_GET['personagem'];

$arrayPersonagens = ['Batman', 'MulherMaravilha', 'Superman', 'Outros'];

for ($i=0; $i < count($arrayPersonagens); $i++) { 
    $contRand[] = $i;
}

shuffle($contRand);

for ($cont=0; $cont < count($perfil); $cont++) { 
    if ($perfil[$contRand[$cont]]['nome'] == $bancoDC[$personagem]['personagem']) {
        unset($perfil[$contRand[$cont]]);
        unset($contRand[$cont]);
    }
}
?>