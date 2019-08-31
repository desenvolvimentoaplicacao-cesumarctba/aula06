<?php

namespace Pacote;

class Tela 
{
    // [explicação de atributos]
    // public    --> ela está acessivel de qualquer lugar da aplicação 
    // private   --> ela só pode ser acessada no escopo da classe
    // protected --> ela só pode ser acessada pela propria classe e suas classes filhas

    // declaração de atributos
    public $title;
    public $form = null;


    // Método construtor
    public function __construct($title, $form)
    {
        $this->title  = $title;
        $this->form   = $form;
    }

    // mostrar (exibe a tela para o usuario)
    public function mostrar()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }


}