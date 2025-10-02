<?php 

class Endereco {
    private $id;
    private $cep;
    private $uf;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    // GETTERS E SETTERS

    public function __construct($data = []) {
        $this->id = $data['id'];
        $this->cep = $data['cep'];
        $this->uf = $data['uf'];
        $this->cidade = $data['cidade'];
        $this->bairro = $data['bairro'];
        $this->rua = $data['rua'];
        $this->numero = $data['numero'];
    }
    
    public function seId($id) { return $this->id = $id; }
    public function setCep($cep) { return $this->cep = $cep; }
    public function setUf($uf) { return $this->uf = $uf; }
    public function setCidade($cidade) { return $this->cidade = $cidade; }
    public function setBairro($bairro) { return $this->bairro = $bairro; }
    public function setRua($rua) { return $this->rua = $rua; }
    public function setNumero($numero) { return $this->numero = $numero; }
    
    public function getId() { return $this->id; }
    public function getCep() { return $this->cep; }
    public function getUf() { return $this->uf; }
    public function getCidade() { return $this->cidade; }
    public function getBairro() { return $this->bairro; }
    public function getRua() { return $this->rua; }
    public function getNumero() { return $this->numero; }

}

?>