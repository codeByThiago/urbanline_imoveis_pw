<?php 

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $cpf;
    private $endereco;
    private $role_id;

    // GETTERS E SETTERS

    public function __construct($data = []) {
        $this->id = $data['id'] ?? null;
        $this->nome = $data['nome'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->senha = $data['senha'] ?? '';
        $this->telefone = $data['telefone'] ?? '';
        $this->cpf = $data['cpf'] ?? '';
        $this->endereco = $data['endereco'] ?? '';
        $this->role_id = $data['role_id'] ?? 1;
    }

    public function setId($id) { return $this->id = $id; }
    public function setNome($nome) { return $this->nome = $nome; }
    public function setEmail($email) { return $this->email = $email; }
    public function setSenha($senha) { return $this->senha = $senha; }
    public function setTel($telefone) { return $this->telefone = $telefone; }
    public function setCpf($cpf) { return $this->cpf = $cpf; }
    public function setEndereco($endereco) { return $this->endereco = $endereco; }
    public function setRoleId($role_id) { return $this->role_id = $role_id; }

    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getEmail() { return $this->email; }
    public function getSenha() { return $this->senha; }
    public function getTel() { return $this->telefone; }
    public function getCpf() { return $this->cpf; }
    public function getEndereco() { return $this->endereco; }
    public function getRoleId() { return $this->role_id; }

    // Funcões e Métodos Importantes

    public function verificarSenha($senhaDigitada) {
        return password_verify($senhaDigitada, $this->senha);
    }
}

?>