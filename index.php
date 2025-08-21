<?php
    include("inserts/header.php");
?>

    <header>
        <?php include("inserts/navbar.php");?>
    </header>

    <main>
        <section id="inicio">
            <div class="background-image-container">
                <img src="assets/img/carrosel (1).jpg" alt="">
                <img src="assets/img/carrosel (2).jpg" alt="">
                <img src="assets/img/carrosel (3).jpg" alt="">
            </div>
            <h1>Venda e aluge imóveis mais perto de você</h1>
            <p>Os melhores imóveis estão aqui!</p>
            <form id="procurarimovel">
                <select name="pretencao" id="pretencao">
                    <option value="Comprar">Comprar</option>
                    <option value="Alugar">Alugar</option>
                    <option value="Codigo">Código</option>
                </select>
                <input type="button" value="Mais filtros">
                <input type="text">
                <input type="submit" value="Procurar Imóvel">
            </form>
    </main>

<?php
    include("inserts/footer.php");
?>