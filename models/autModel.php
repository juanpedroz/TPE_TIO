<<?php 
    require_once ('models/base.model.php');
    
    class Autmodel extends model{

        public function getUser($user){
            $sentencia = $this->db->prepare("SELECT * FROM user WHERE username = ?");
            $sentencia->execute([$user]);
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
    }    