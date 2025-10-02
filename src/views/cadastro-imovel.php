<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/412e60f1e0.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Urbanline Imóveis - Início</title>
</head>
<body>
    <?php include_once __DIR__ . "/../includes/navbar.php"; ?>
    <main>
        <section id="cadastro-imovel">
            <form action="controllers/ProcessCadastraImovel.php" method="get">
                <h1>Cadastro de Imóvel</h1>
                <section id="dados-gerais">
                    <div class="input-group">
                        <label for="tipo-imovel">Tipo do Imóvel:</label>
                        <select name="tipo-imovel" id="tipo-imovel">
                            <option value="casa" selected>Casa</option>
                            <option value="apartamento">Apartamento</option>
                            <option value="kitnet">Kitnet</option>
                            <option value="sobrado">Sobrado</option>
                            <option value="terreno">Terreno</option>
                            <option value="comercial">Comercial</option>
                            <option value="cobertura">Cobertura</option>
                            <option value="galpao">Galpão</option>
                            <option value="chacara">Chacara</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="valor">Valor</label>
                        <input type="number" name="valor" id="valor">
                    </div>
                    <div class="input-group">
                        <label for="area">Área (m²)</label>
                        <input type="number" name="area" id="area">
                    </div>
                    <div class="input-group">
                        <label for="descricao">Descrição do Imóvel</label>
                        <input type="text" name="descricao" id="descricao">
                    </div>
                    <div class="input-group">
                        <label for="condicao">Condição do Imóvel</label>
                        <select name="condicao" id="condicao">
                            <option value="novo" selected>Novo</option>
                            <option value="usado">Usado</option>
                            <option value="em_construcao">Em construção</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="quant-quartos">Quantidade de Quartos</label>
                        <input type="number" name="quant-quartos" id="quant-quartos">
                    </div>
                    <div class="input-group">
                        <label for="quant-suites">Quantidade de suites</label>
                        <input type="number" name="quant-suites" id="quant-suites">
                    </div>
                    <div class="input-group">
                        <label for="quant-cozinhas">Quantidade de cozinhas</label>
                        <input type="number" name="quant-cozinhas" id="quant-cozinhas">
                    </div>
                    <div class="input-group">
                        <label for="quant-banheiros">banheiros de banheiros</label>
                        <input type="number" name="quant-banheiros" id="quant-banheiros">
                    </div>
                    <div class="input-group">
                        <label for="quant-piscinas">Quantidade de piscinas</label>
                        <input type="number" name="quant-piscinas" id="quant-piscinas">
                    </div>
                    <div class="input-group">
                        <label for="vagas-garagem">Vagas na garagem</label>
                        <input type="number" name="vagas-garagem" id="vagas-garagem">
                    </div>
                    <div class="input-group">
                        <label for="status">Status do Imóvel</label>
                        <select name="status" id="status">
                            <option value="disponivel" selected>Disponível</option>
                            <option value="alugado">Alugado</option>
                            <option value="vendido">Vendido</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <input type="checkbox" name="mobiliado" id="mobiliado" value="sim">
                        <label for="mobiliado">Mobiliado?</label>
                    </div>
                    <div class="input-group">
                        <label for="fotos">Fotos</label>
                        <input type="file" name="fotos[]" id="fotos" multiple accept="image/*
                        <div class="mostra-fotos-selecionadas"></div>
                    </div>
                </section>
                <section id="endereco">
                    <h2>Endereço do Imóvel</h2>
                    <div class="input-group">
                        <label for="cep">CEP:</label>
                        <input type="text" name="cep" id="cep" placeholder="Digite seu CEP">
                    </div>
                    <div class="input-group">
                        <label for="uf">UF:</label>
                        <input type="text" name="uf" id="uf" placeholder="Digite seu estado">
                    </div>
                    <div class="input-group">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" id="cidade" placeholder="Digite sua cidade">
                    </div>
                    <div class="input-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" name="bairro" id="bairro" placeholder="Digite seu bairro">
                    </div>
                    <div class="input-group">
                        <label for="logradouro">Logradouro:</label>
                        <input type="text" name="logradouro" id="logradouro" placeholder="Digite sua logradouro">
                    </div>
                    <div class="input-group">
                        <label for="numero">Número:</label>
                        <input type="text" name="numero" id="numero" placeholder="Digite seu número">
                    </div>
                </section>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
        <footer>
        <div class="footer-grid-container">
            <section class="localizacao">
                <h2>Urbanline Imóveis</h2>
                <p>Rua Exemplo, 123 - Centro - São Paulo - SP</p>
            </section>
            <section class="produtos">
                <h2>Produtos</h2>
                <nav>
                    <ul>
                        <li><a href="#">Apartamento</a></li>
                        <li><a href="#">Casa</a></li>
                        <li><a href="#">Terreno</a></li>
                        <li><a href="">Sobrado</a></li>
                    </ul>
                </nav>
            </section>
            <section class="sobre-nos">
                <h2>Sobre Nós</h2>
                <nav>
                    <ul>
                        <li><a href="#">Nossa História</a></li>
                        <li><a href="#">Equipe</a></li>
                    </ul>
                </nav>
            </section>
            <section class="contate-nos">
                <h2>Contate-nos</h2>
                <nav>
                    <ul class="redes-sociais">
                        <li><a href="#">Fale Conosco</a></li>
                    </ul>
                </nav>
            </section>
        </div>

        <div class="copyright">
            <p>Copyright© Todos os Direitos Reservados</p>
            <p>As ofertas do site estão sujeitas a modificações a qualquer tempo e sem aviso prévio.</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>