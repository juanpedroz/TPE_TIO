<?php
require_once './models/product.model.php';
require_once './views/product.view.php'; 

class ProductController {

    private $model;
    private $view; 

    public function __construct(){
        $this->model = new ProductModel;
        $this->view = new ProductView; 
    }

    // Home de la página
    public function showHome(){
        $this->view->ViewHome(); 
    }

  /*  public function productsByCateg($id){
        $products = $this->model->getProductsByCateg($id);
        $this->view->viewProductsByCateg($products); 
        //var_dump($products); */

    

    public function showAllProducts(){
        $products = $this->model->getAllProducts();
        $this->view->viewAllProducts($products); 
    }

    public function showDetailsProduct($idproduct){
        $detalle = $this->model->getProduct($idproduct);
        $this->view->viewDetails($detalle); 
    }

    public function showError(){
        $this->view->viewError(); 
    }
}