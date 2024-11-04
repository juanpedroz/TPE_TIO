<?php 
     require_once ('models/base.model.php');

    class ProductModel extends Model{

    public function getProductsByCateg($id) {
        $sentencia = $this->db->prepare("SELECT p.*, c.nombre AS categoria FROM producto p 
        INNER JOIN categoria c ON p.ID_categoria = c.ID_categoria 
        WHERE p.ID_categoria = ?");
        $sentencia->execute([$id]);
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ); 
            
        return $products;
    }
        

    public function getAllProducts(){

        $sentencia = $this->db->prepare("SELECT p.*, c.nombre AS categoria FROM producto p 
        INNER JOIN categoria c ON p.ID_categoria = c.ID_categoria"); 
        $sentencia->execute();
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ); 
        
        return $products;
    }

    public function getProduct($idproduct){

        $sentencia = $this->db->prepare("SELECT p.*, c.nombre AS categoria FROM producto p 
        INNER JOIN categoria c ON p.ID_categoria = c.ID_categoria 
        WHERE p.ID_producto = ?"); 
        $sentencia->execute([$idproduct]);
        $detalles = $sentencia->fetch(PDO::FETCH_OBJ);
        return $detalles;
    }
}    