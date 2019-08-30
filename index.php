<?php

// implementação do PHP FIG (importação)
require_once __DIR__ . '/vendor/autoload.php';





// chamada das nossas classes 

$arrInput   = [];
$input1      = new \Pacote\Input('text', 'meuInput1', 0, 'Input 1: ');
$input2      = new \Pacote\Input('text', 'meuInput2', 0, 'Input 2: ');

$arrInput[] = [
    $input1,
    $input2
];

// echo '<pre>';
// print_r($arrInput);
// echo '</pre>';
// die();

$formulario = new \Pacote\Formulario('POST', '/teste.php', $arrInput);

echo '<pre>';
print_r($formulario);
echo '</pre>';
die();

$tela       = new \Pacote\Tela('Minha Tela', $formulario);

$tela->mostrar();

