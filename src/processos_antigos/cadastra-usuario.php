<?php 

    include_once '../includes/conexao.php';

    // Insert do Endereço
    try {
        $cep = $_POST['cep'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];

        $sql_insert_endereco = "INSERT INTO endereco (cep, uf, cidade, logradouro, numero) VALUES (:cep, :uf, :cidade, :logradouro, :numero)";
        
        $stmt_endereco = $conn->prepare($sql_insert_endereco);

        $stmt_endereco->bindParam(':cep', $cep, PDO::PARAM_STR);
        $stmt_endereco->bindParam(':uf', $uf, PDO::PARAM_STR);
        $stmt_endereco->bindParam(':cidade', $cidade, PDO::PARAM_STR);
        $stmt_endereco->bindParam(':logradouro', $logradouro, PDO::PARAM_STR);
        $stmt_endereco->bindParam(':numero', $numero, PDO::PARAM_STR);

        $stmt_endereco->execute();

        $endereco_id = $conn->lastInsertId();
    } catch (Exception $e) {
        die('Problemas para Inserir o Endereço' . $e->getMessage() . $e->getCode());
    }
    

    // Insert do Usuário

    try {
        $sql_insert_user = "INSERT INTO usuarios (nome, email, senha, telefone, cpf, endereco_id) VALUES (:nome, :email, :senha, :telefone, :cpf, :endereco)";

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];

        $stmt = $conn->prepare($sql_insert_user);

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
        $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $stmt->bindParam(':endereco', $endereco_id, PDO::PARAM_INT);

        $stmt->execute();
        header('Location: ../../public/login.php');
    } catch (Exception $e) {
        die('Problemas para Inserir o Endereço' . $e->getMessage() . $e->getCode());
    }

?>