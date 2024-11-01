<?php
require_once "./views/general.view.php";

class GeneralController { 

   private $viewGeneral;
   

    public function __construct(){ //funcion que construye los objetos(ej modelCategori) que voy a usar
          $this->viewGeneral = new GeneralView();
    }

    public function mostrarInicio(){
        
        $this->viewGeneral->mostrarInicio();
    
    }
    
}