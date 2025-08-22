<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "";

    $connection = new mysqli($host, $user, $pass, $dbname);

    if ($connection->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    };

    $conn->close();
?>