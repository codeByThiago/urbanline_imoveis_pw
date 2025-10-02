<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'urbanline_banco';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exc) {
        echo "Problema de conexão: " . $exc->getMessage();
    }

?>