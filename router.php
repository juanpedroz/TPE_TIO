<?php
require_once "controllers/general.controller.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/'); //constante se usa para generar automáticamente la URL base de una aplicación web, de forma dinámica,
    
    if (empty($_GET['action'])) { 
        $_GET['action'] = 'home';
    } //si esta vacio que abra el home

    $accion = $_GET['action']; $parametros = explode('/', $accion); // obtiene un parámetro de la URL y lo divide en partes utilizando el carácter /

    switch ($parametros[0]) { 
        case 'home' :
            $controller = new GeneralController();// PHP está creando un objeto de la clase GeneralController y lo está almacenando en la variable $controller.
            $controller->mostrarInicio();
        break;
/*
        case "producto" :
            $controller= new ProductController();
            $controller->mostrarproducto($parametros[1]); // producto/:ID
        break;
        
        case "pedido" :
            if(isset($parametros[1])){
                $controller= new PedidoController();
                $controller->mostrarPedido($parametros[1]);
            }
        break;

       case "login":
            $controller= new usuariosController();
            $controller->mostrarlogin();
        break;
        case "login_usuario":
            $controller =new usuariosController();
            $controller-> login();
        break;
        case "logout":
            if (session_status() != PHP_SESSION_ACTIVE){
                session_start();
            }
            $_SESSION = [];
        break;*/

        default: 
        break; 
        
      }