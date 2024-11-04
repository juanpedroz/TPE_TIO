<?php
require_once ('./.config.php');

class Model {
    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO(
                "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB . ";charset=utf8",
                MYSQL_USER, MYSQL_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar con la base de datos" );
        }
    }
}
?>