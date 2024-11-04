<?php

require_once 'libs/Smarty.class.php'; // Asegúrate de tener Smarty configurado

class AutView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showLogin() {
        $this->smarty->display('login.tpl');
        
    }
}