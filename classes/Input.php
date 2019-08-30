<?php

namespace Pacote;

class Input 
{
    // [explicação de atributos]
    // public    --> ela está acessivel de qualquer lugar da aplicação 
    // private   --> ela só pode ser acessada no escopo da classe
    // protected --> ela só pode ser acessada pela propria classe e suas classes filhas

    // declaração de atributos
    public $type;
    public $name;
    public $required;
    public $text;


    // Método construtor
    public function __construct($type, $name, $required, $text)
    {
        $this->$type     = $type;
        $this->$name     = $name;
        $this->$required = $required;
        $this->$text     = $text;
    }


}