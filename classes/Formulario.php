<?php

namespace Pacote;

class Formulario
{
    // [explicação de atributos]
    // public    --> ela está acessivel de qualquer lugar da aplicação 
    // private   --> ela só pode ser acessada no escopo da classe
    // protected --> ela só pode ser acessada pela propria classe e suas classes filhas

    // declaração de atributos
    public $method;
    public $action;
    public $arrinput;


    // Método construtor
    public function __construct($method, $action, $arrInput)
    { 
        // atribuições
        $this->method     = $method;
        $this->action     = $action;
        $this->arrinput   = $arrInput;
    }

    // metodo - cria formulario
    public function criaForm()
    {
        $str = "<form method='$this->method' action='$this->action'>";

        for ($i=0; $i < count($this->arrinput); $i++) { 
            // gerar o campo criado dentro da string
            $str .= $this->arrinput[$i]->criaCampo();
        }

        $str .= "</form>";

        return $str; 


    }



}