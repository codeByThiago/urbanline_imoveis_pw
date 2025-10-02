<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="https://kit.fontawesome.com/412e60f1e0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Urbanline Imóveis - Página Inicial</title>
</head>
<body class="inicial">

<?php include "../src/includes/navbar.php";?>

<?php include "../src/views/home.php";?>

<?php include "../src/includes/footer.php";?>