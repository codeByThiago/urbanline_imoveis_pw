<?php
    include("inserts/header.php");
?>

    <header>
        <?php include("inserts/navbar.php");?>
    </header>

    <main>
        <section id="inicio">
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