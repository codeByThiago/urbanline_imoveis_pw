<?php 

require_once __DIR__ . '/../models/Endereco.php';

class EnderecoDAO {
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function create(Endereco $endereco) : int {
        try {
            $sql = "INSERT INTO endereco (cep, uf, cidade, bairro, rua, numero) VALUES (:cep , :uf , :cidade , :bairro , :rua , :numero)";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':cep' => $endereco->getCep(),
                ':uf' => $endereco->getUf(),
                ':cidade' => $endereco->getCidade(),
                ':bairro' => $endereco->getBairro(),
                ':rua' => $endereco->getRua(),
                ':numero' => $endereco->getNumero()
            ]);
            return (int)$this->conn->lastInsertId();
        } catch (PDOException $e) {
            throw new Exception("EnderecoDAO::create - Erro ao criar endereço: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function listAll() : array {
        try {
            $sql = "SELECT * FROM endereco";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $enderecos = [];
            foreach ($data as $endereco) {
                $enderecos[] = new Endereco($endereco);
            }
            return $enderecos;
        } catch (PDOException $e) {
            throw new Exception("EnderecoDAO::listAll - Erro ao listar endereços: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function findById(int $id) : ?Endereco {
        try {
            $sql = "SELECT * FROM endereco WHERE id = ?";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data ? new Endereco($data) : null;
        } catch (PDOException $e) {
            throw new Exception("EnderecoDAO::findById - Erro ao buscar endereço: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function update(Endereco $endereco) : bool {
        try {
            $sql = "UPDATE endereco SET cep=:cep, uf=:uf, cidade=:cidade, bairro=:bairro, rua=:rua, numero=:numero WHERE id = :id";
    
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':id' => $endereco->getId(),
                ':cep' => $endereco->getCep(),
                ':uf' => $endereco->getUf(),
                ':cidade' => $endereco->getCidade(),
                ':bairro' => $endereco->getBairro(),
                ':rua' => $endereco->getRua(),
                ':numero' => $endereco->getNumero()
            ]);
        } catch (PDOException $e) {
            throw new Exception("EnderecoDAO::update - Erro ao atualizar endereço: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    public function delete(int $id) : bool {
        try {
            $sql = "DELETE FROM endereco WHERE id = ?";
    
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            throw new Exception("EnderecoDAO::delete - Erro ao deletar endereço: " . $e->getMessage(), (int)$e->getCode(), $e);
        }
    }
}

?>