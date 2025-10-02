<?php
    include "../src/includes/conexao.php";

    $imovel_id = $_GET['id'];

    // Consulta 1: Pegar os dados do imóvel
    $sql_query_imovel = "SELECT * FROM imoveis WHERE id = ? LIMIT 1";
    $stmt_imovel = $conn->prepare($sql_query_imovel);
    $stmt_imovel->execute([$imovel_id]); 
    
    $imovel = $stmt_imovel->fetch(PDO::FETCH_ASSOC);

    // Consulta 2: Pegar as fotos do imóvel
    $sql_query_fotos = "SELECT * FROM imovel_fotos WHERE imovel_id = ?";
    $stmt_fotos = $conn->prepare($sql_query_fotos);
    $stmt_fotos->execute([$imovel_id]);
    
    $fotos = $stmt_fotos->fetchAll(PDO::FETCH_ASSOC);

    // Consulta 3: Endereço do Imóvel
    $sql_query_ender = "SELECT * FROM endereco WHERE id = ? LIMIT 1";
    $stmt_ender = $conn->prepare($sql_query_ender);
    $stmt_ender->execute([$imovel['id']]);

    $endereco = $stmt_ender->fetch(PDO::FETCH_ASSOC);

    // Consulta 4: Proprietário do Imóvel
    $sql_query_proprietario = "SELECT * FROM usuarios WHERE id = ? AND role_id = 2 LIMIT 1";
    $stmt_proprietario = $conn->prepare($sql_query_proprietario);
    $stmt_proprietario->execute([$imovel['usuario_id']]);

    $proprietario = $stmt_proprietario->fetch(PDO::FETCH_ASSOC);
?>

<body>
    <section id="detalhe">
        <div class="container">
            <div class="carrosel-imovel">
                <div class="fotos-wrapper">
                    <?php if (!empty($fotos)) {
                        foreach ($fotos as $imovel_foto) { ?>
                            <img src="assets/img/full/<?= $imovel_foto['url']?>" alt="Foto do Imóvel" class="imovel-foto">
                        <?php }
                    } else { ?>
                        <img src="assets/img/placeholder.png" alt="Sem fotos disponíveis" class="imovel-foto">
                    <?php } ?>
                </div>

                <button class="nav-btn prev" aria-label="Foto anterior"><i class="fas fa-chevron-left"></i></button>
                <button class="nav-btn next" aria-label="Próxima foto"><i class="fas fa-chevron-right"></i></button>

                <div class="carousel-indicators"></div>
            </div>

            <div class="info-principal">
                <h1 class="title-luxo"><?= $imovel['nome']?></h1>
                <p class="valor">R$ <?= number_format($imovel['valor'], 2, ',', '.') ?></p>
                <p class="tipo"><?= ucfirst($imovel['tipo_imovel']) ?> | Status: <span class="status-<?= $imovel['status'] ?>"><?= ucfirst($imovel['status']) ?></span></p>
                <div class="endereco">
                    <i class="fas fa-map-marker-alt"></i> 
                    <?= $endereco['logradouro']?>, <?= $endereco['numero']?> - <?= $endereco['bairro']?>, <?= $endereco['cidade']?>/<?= $endereco['uf']?>
                </div>
                <div class="detalhes-basicos">
                    <span><i class="fas fa-bed"></i> Quartos: <strong><?= $imovel['quant_quartos']?></strong></span>
                    <span><i class="fas fa-bath"></i> Banheiros: <strong><?= $imovel['quant_banheiros']?></strong></span>
                    <span><i class="fas fa-car"></i> Vagas: <strong><?= $imovel['vagas_garagem']?></strong></span>
                    <span><i class="fas fa-ruler-combined"></i> Área: <strong><?= $imovel['area']?> m²</strong></span>
                </div>
            </div>

            <div class="separador-luxo"></div>

            <div class="descricao">
                <h2 class="title-luxo">Descrição</h2>
                <p><?= nl2br($imovel['descricao']) ?></p>
            </div>
            
            <div class="separador-luxo"></div>

            <div class="detalhes-adicionais">
                <h2 class="title-luxo">Detalhes</h2>
                <ul class="grid-detalhes">
                    <li>Condição: <span><?= ucfirst(str_replace('_', ' ', $imovel['condicao'])) ?></span></li>
                    <li>Suítes: <span><?= $imovel['quant_suites']?></span></li>
                    <li>Cozinhas: <span><?= $imovel['quant_cozinhas']?></span></li>
                    <li>Piscina: <span><?= $imovel['quant_piscinas'] > 0 ? 'Sim' : 'Não' ?></span></li>
                    <li>Mobiliado: <span><?= $imovel['mobiliado'] ? 'Sim' : 'Não' ?></span></li>
                </ul>
            </div>

            <div class="separador-luxo"></div>

            <?php if (!empty($proprietario)) { ?>
                <div class="proprietario-info">
                    <h2 class="title-luxo">Proprietário</h2>
                    <div class="proprietario-card">
                        <?php 
                            // Define o caminho da imagem: se 'foto_url' estiver vazio, usa 'default-user.jpg'
                            $foto_proprietario = $proprietario['foto_url'] ?: 'default-user.jpg';
                        ?>
                        
                        <img src="assets/img/icones/<?= $foto_proprietario ?>" alt="Foto do Proprietário">
                        
                        <div class="proprietario-details">
                            <p>**Nome:** <span><?= $proprietario['nome']?></span></p>
                            <p>**Contato:** <span><?= $proprietario['telefone']?></span></p>
                            <p>**Email:** <span><?= $proprietario['email']?></span></p>
                        </div>
                        
                        <div class="proprietario-acao">
                            <a href="#" class="btn-contato">
                                <i class="fas fa-phone"></i> Entrar em Contato
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const wrapper = document.querySelector('.fotos-wrapper');
        const fotos = document.querySelectorAll('.imovel-foto');
        const prevBtn = document.querySelector('.nav-btn.prev');
        const nextBtn = document.querySelector('.nav-btn.next');
        const indicatorsContainer = document.querySelector('.carousel-indicators');

        if (fotos.length === 0) return; // Não faz nada se não houver fotos

        let currentIndex = 0;
        const totalFotos = fotos.length;

        // Função para atualizar a exibição do carrossel
        function updateCarousel() {
            const offset = -currentIndex * 100; // Move o wrapper em porcentagem
            wrapper.style.transform = `translateX(${offset}%)`;
            updateIndicators();
        }

        // Função para atualizar os indicadores (bolinhas)
        function updateIndicators() {
            indicatorsContainer.innerHTML = '';
            fotos.forEach((_, index) => {
                const indicator = document.createElement('span');
                indicator.classList.add('indicator');
                if (index === currentIndex) {
                    indicator.classList.add('active');
                }
                indicator.addEventListener('click', () => {
                    currentIndex = index;
                    updateCarousel();
                });
                indicatorsContainer.appendChild(indicator);
            });
        }

        // Evento para o botão PRÓXIMO
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalFotos;
            updateCarousel();
        });

        // Evento para o botão ANTERIOR
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalFotos) % totalFotos;
            updateCarousel();
        });

        updateCarousel(); 
    });
    </script>
</body>
</html>