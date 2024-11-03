<?php

require_once 'views/aut.view.php'; 
require_once 'models/aut.model.php';

class AutController {

    private $view;
    private $model;

    public function __construct() {
        $this->model = new Autmodel();
        $this->view = new Autview();
    }

    public function showLogin() {
        $this->view->showLogin();
    }
    public function verification() {
        $username = $_POST['username']; 
        $password = $_POST['password'];
        
        // Buscar el usuario por nombre
        $user = $this->model->getUser($username);
    
        // Si existe el usuario y la contraseña es correcta
        if ($user && $password == $user->password) {
            // Iniciar sesión y guardar los datos del usuario
            session_start();
            $_SESSION['IS_LOGGED'] = true;
            $_SESSION['ID_USER'] = $user->id_user;
            $_SESSION['USERNAME'] = $user->username;
    
            header("Location: " . BASE_URL . "home"); // Redirigir al home
        } else {
            var_dump("no entre");
            $this->view->showLogin();
        }
    }
    
    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'home');
    }
}