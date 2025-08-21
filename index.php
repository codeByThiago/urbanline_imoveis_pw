<?php
    include("inserts/header.php");
?>

    <header>
        <?php include("inserts/navbar.php");?>
    </header>

    <main>
        <section class="background-image-container">
            <img src="assets/img/carrosel (1).jpg" alt="">
            <img src="assets/img/carrosel (2).jpg" alt="">
            <img src="assets/img/carrosel (3).jpg" alt="">
            <div class="dark-overlay"></div>

            <div class="content-container">
                <h1 class="font-emphasis">Venda e aluge imóveis mais perto de você</h1>
                <p>Os melhores imóveis estão aqui!</p>
                <form id="flex-find-property">
                    <select name="pretencao" id="pretencao">
                        <option value="Comprar">Comprar</option>
                        <option value="Alugar">Alugar</option>
                        <option value="Codigo">Código</option>
                    </select>
                    <input class="btn-more-filters" type="button" value="Mais filtros">
                    <input type="text">
                    <input class="btn-search-property" type="submit" value="Procurar Imóvel">
                </form>
            </div>
        </section>
    </main>

<?php
    include("inserts/footer.php");
?>