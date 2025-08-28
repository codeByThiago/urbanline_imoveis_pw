<?php include("../src/includes/header.php");?>
<?php include("../src/includes/navbar.php");?>

<section class="background-image-container">
    <img src="assets/images/carrosel-1.jpg" alt="" class="background-image active">
    <img src="assets/images/carrosel-2.jpg" alt="" class="background-image">
    <img src="assets/images/carrosel-3.jpg" alt="" class="background-image">
    <!-- <img src="assets/images/carrosel-4.jpg" alt="" class="background-image">
    <img src="assets/images/carrosel-5.jpg" alt="" class="background-image"> -->
    <div class="dark-overlay"></div>
    
    <div class="find-property-container">
        <h1>Venda e compre seus imóveis aqui</h1>
        <p>Os melhores apartamentos que você irá encontrar pelo preço mais acessível!</p>
        <form action="search-property.php" class="find-property-form" autocomplete="off">
            <div class="muiti-select-dropdown">
                <div class="selected">Pretenção</div>
                <!-- <ul class="options">
                    <li data-value=""></li>
                    <li data-value=""></li>
                    <li data-value=""></li>
                    <li data-value=""></li>
                </ul> -->
            </div>
            <input type="hidden" name="tipo-imovel" id="tio-imovel">
            
            <div class="muiti-select-dropdown">
                <div class="selected">Tipo de imóvel</div>
                <!-- <ul class="options">
                    <li data-value="apartamento">Apartamento</li>
                    <li data-value="casa">Casa</li>
                    <li data-value="terreno">Terreno</li>
                    <li data-value="comercial">Comercial</li>
                </ul> -->
            </div>
            <input type="hidden" name="tipo-imovel" id="tipo-imovel">
            
            <label for="localidade"></label>
            <input type="text" name="localidade" id="localidade" placeholder="Digite o condomínio, região, bairro">
            <input type="submit" value="Procurar Imóvel" class="submit">
        </form>
    </div>
</section>

<section class="best-options">
    <h2>Melhores Opções</h2>
    <div class="grid-best-options">
        
    </div>
</section>

<?php include("../src/includes/footer.php");?>