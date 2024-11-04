
<?php

require_once('./libs/Smarty.class.php');

class ProductView {
    private $smarty;

    public function __construct() {
        // Inicializamos Smarty y configuramos sus rutas
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('./templates');  // Carpeta donde irán las plantillas .tpl
        $this->smarty->setCompileDir('./templates_c'); // Carpeta donde Smarty guarda las plantillas compiladas
    }

    private function getSmarty(){
        return $this->smarty;
    }

    public function viewHome(){
        $this->getSmarty()->display('home.tpl');
    }

    public function viewAllProducts($products){
        $this->smarty->assign('products', $products); // Asignamos los productos a la plantilla
        $this->smarty->display('showProducts.tpl'); // Mostramos la plantilla
    }

    public function viewDetails($detalle){
        $this->getSmarty()->assign('detalle', $detalle);
        $this->getSmarty()->display('showDetails.tpl');
    }

    public function viewProductsByCateg($products){
        $this->getSmarty()->assign('products', $products);
        $this->getSmarty()->display('showProductsByCateg.tpl');
    }

    public function viewError(){
        $this->getSmarty()->display('error.tpl');
    }
}