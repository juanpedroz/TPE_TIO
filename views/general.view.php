<?php

require_once "./libs/Smarty.class.php";

class GeneralView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('./templates');
        $this->smarty->setCompileDir('./templates_c');
    }

    private function getSmarty(){
        return $this->smarty;
    }
    public function mostrarInicio(){
       $this->getSmarty()->display('home.tpl');
    }
}