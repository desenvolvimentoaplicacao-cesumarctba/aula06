<?php

// implementação do PHP FIG (importação)
require_once __DIR__ . '/vendor/autoload.php';


// chamada das nossas classes 

$arrInput   = [];

$inpNome     = new \Pacote\Input("text",   "nome", true, "Nome:");
$inpAltura   = new \Pacote\Input("text",   "altura", true, "Altura:");
$inpPeso     = new \Pacote\Input("text",   "peso", true, "Peso:");
$inpEmail     = new \Pacote\Input("email",  "email", true, "Email:");
$inpSubmit   = new \Pacote\Input("submit", "enviar", true, "");

$arrInput[] = $inpNome;
$arrInput[] = $inpAltura;
$arrInput[] = $inpPeso;
$arrInput[] = $inpEmail;
$arrInput[] = $inpSubmit;


$formulario = new \Pacote\Formulario('POST', '/', $arrInput);

$tela       = new \Pacote\Tela('Teste IMC', $formulario, $_POST);

// $tela->corDeFundo = "red";
$tela->mostrar();
// $tela->recebePost($_POST);

