<?php include("inserts/header.php");?>
<?php include("inserts/navbar.php");?>

<section class="background-image-container">
    <img src="assets/img/carrosel (1).jpg" alt="" class="background-image active">
    <img src="assets/img/carrosel (2).jpg" alt="" class="background-image">
    <img src="assets/img/carrosel (3).jpg" alt="" class="background-image">
    <img src="assets/img/carrosel (1).jpg" alt="" class="background-image">
    <img src="assets/img/carrosel (2).jpg" alt="" class="background-image">
    <div class="dark-overlay"></div>
    
    <div class="find-property-container">
        <h1>Venda e Locação de Imóveis em todo o Brasil</h1>
        <p>Os melhores imóveis estão aqui!</p>
        <form action="" class="find-property-form">
            <input type="text" placeholder="Apartamento" class="input-text">
            <input type="button" value="Mais opções de filtros" id="filters">
            <input type="submit" value="Procurar Imóvel" class="submit-btn">
        </form>
    </div>
</section>

<section id="best-options">
    <h1>Melhores Opções</h1>
    <div id="best-options-grid">
        <img src="assets/img/carrosel (1).jpg" alt="" class="best-options-image">
        <img src="assets/img/carrosel (2).jpg" alt="" class="best-options-image">
        <img src="assets/img/carrosel (3).jpg" alt="" class="best-options-image">
    </div>
</section>



<script src="js/main.js"></script>

<?php include("inserts/footer.php");?>