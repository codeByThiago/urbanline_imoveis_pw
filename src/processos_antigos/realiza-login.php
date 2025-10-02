<?php
require '../includes/conexao.php';

session_start();

if (!isset($_POST['email'], $_POST['senha'])) {
    $_SESSION['login_erro'] = "Preencha todos os campos!";
    header("Location: ../../public/login.php");
    exit;
}

$email = trim($_POST['email']);
$senha = $_POST['senha'];

$sql_query = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
$stmt = $conn->prepare($sql_query);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() === 0) {
    $_SESSION['email_erro'] = true;
    header("Location: ../../public/login.php");
    exit;
}

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['logado'] = true;
    $_SESSION['role'] = $usuario['role_id'];
    
    header("Location: ../../public/");
    exit;
} else {
    $_SESSION['senha_erro'] = true;
    header("Location: ../../public/login.php");
    exit;
}
?>