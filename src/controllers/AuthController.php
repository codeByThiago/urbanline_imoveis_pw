<?php 

require_once __DIR__ . "/../models/Usuario.php";
require_once __DIR__ . "/../DAO/UsuarioDAO.php";

class AuthController {
    private $usuarioDAO;

    public function __construct(PDO $conn) {
        $this->usuarioDAO = new UsuarioDAO($conn);
    }

    public function login() {

    }

    public function logout() {
        
    }
}

?>