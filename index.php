<?php

// implementação do PHP FIG (importação)
require_once __DIR__ . '/vendor/autoload.php';






// chamada das nossas classes 

$arrInput   = [];

$input1      = new \Pacote\Input("text", "meuInput1", true, "Input 1");
$input2      = new \Pacote\Input("text", "meuInput2", true, "Input 2");

$arrInput[] = [
    $input1,
    $input2
];

$formulario = new \Pacote\Formulario('POST', '/teste.php', $arrInput);

$tela       = new \Pacote\Tela('Minha Tela', $formulario);

$tela->mostrar();

