<?php 

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'banco_teste';
    private $conn = NULL;

    public function getConnection() {
        if ($this->conn === NULL) {
            try {
                $this->conn = new PDO(
                    "mysql:host{$this->host};
                    dbname={$this->dbname};
                    charset:utf-8",
                    $this->user,
                    $this->password);

                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("<b>Erro de Conexão:</b> " . $e->getMessage());
            } catch (Exception $e) {
                die("<b>Problema genérico:</b> " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}

?>