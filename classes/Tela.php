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
    public $corDeFundo = "gray";
    public $post;


    // Método construtor
    public function __construct($title, $form, $post)
    {
        $this->title  = $title;
        $this->form   = $form;
        $this->post   = $post;
    }

    // mostrar (exibe a tela para o usuario)
    public function mostrar()
    {
        $str = "<html>";
        $str .= "        <head>";
        $str .= "               <title>$this->title</title>";
        $str .= "                <style>body {background-color: $this->corDeFundo;}</style>";
        $str .= "        </head>";
        $str .= "        <body>";
        $str .= $this->form->criaForm();
        $str .= "               <pre>";
        $str .=         $this->recebePost();
        $str .= "               </pre>";
        $str .= "        </body>";
        $str .= "</html>";

        echo $str;
    }


    // recebe post
    public function recebePost()
    {
        $str = "";
        foreach ($this->post as $key => $value) {
             $str .= "$key => $value <br>";
        }

        return $str; 
    }


}