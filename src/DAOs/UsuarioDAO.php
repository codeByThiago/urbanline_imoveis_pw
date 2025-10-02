<?php 

require_once __DIR__ . "/../models/Usuario.php";

class UsuarioDAO {
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }


    public function create(Usuario $usuario) : int {
        try {
            $sql = "INSERT INTO usuarios(nome, email, senha, telefone, cpf, endereco, role_id)
            VALUES(:nome, :email, :senha, :telefone, :cpf, :endereco, :role_id)";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                    ':nome' => $usuario->getNome(),
                    ':email' => $usuario->getEmail(),
                    ':senha' => $usuario->getSenha(),
                    ':telefone' => $usuario->getTel(),
                    ':cpf' => $usuario->getCpf(),
                    ':endereco' => $usuario->getEndereco(),
                    ':role_id' => $usuario->getRoleId()
                ]);
            return (int)$this->conn->lastInsertId();
        } catch (PDOException $e) {
            throw new Exception("UsuarioDAO::create - Erro ao criar usuário: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function listAll() : array {
        try {
            $sql = "SELECT * FROM usuarios";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $usuarios = [];
            foreach ($data as $usuario) {
                $usuarios[] = new Usuario($usuario);
            }
            return $usuarios;
        } catch (PDOException $e) {
            throw new Exception("UsuarioDAO::listAll - Erro ao listar usuários: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function findByEmail(string $email) : ?Usuario {
        try {
            $sql = "SELECT * FROM usuarios WHERE email = ?";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$email]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data ? new Usuario($data) : null;
        } catch (PDOException $e) {
            throw new Exception("UsuarioDAO::findByEmail - Erro ao buscar usuário: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function findByCPF(string $cpf) : ?Usuario {
        try {
            $sql = "SELECT * FROM usuarios WHERE cpf = ?";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$cpf]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data ? new Usuario($data) : null;
        } catch (PDOException $e) {
            throw new Exception("UsuarioDAO::findByCPF - Erro ao buscar usuário: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function findById(int $id) : ?Usuario {
        try {
            $sql = "SELECT * FROM usuarios WHERE id = ?";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data ? new Usuario($data) : null;
        } catch (PDOException $e) {
            throw new Exception("UsuarioDAO::findById - Erro ao buscar usuário: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
        
    }

    public function update(Usuario $usuario) : bool {
        try {
            $sql = "UPDATE usuarios SET nome=:nome, email=:email, senha=:senha, telefone=:telefone, cpf=:cpf, endereco=:endereco, role_id=:role_id WHERE id = :id";
            
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                    ':id' => $usuario->getId(),
                    ':nome' => $usuario->getNome(),
                    ':email' => $usuario->getEmail(),
                    ':senha' => $usuario->getSenha(),
                    ':telefone' => $usuario->getTel(),
                    ':cpf' => $usuario->getCpf(),
                    ':endereco' => $usuario->getEndereco(),
                    ':role_id' => $usuario->getRoleId()
                ]);
        } catch (PDOException $e) {
            throw new Exception("UsuarioDAO::update - Erro ao atualizar usuário: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function delete(int $id) : bool {
        try {
            $sql = "DELETE FROM usuarios WHERE id = ?";
    
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$id]);            
        } catch (PDOException $e) {
            throw new Exception("UsuarioDAO::delete - Erro ao deletar usuário: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }
}

?>