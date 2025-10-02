<?php

    include 'conexao.php';

    $proprietario = null;
    $foto_proprietario = 'default-user.jpg';

    if (isset($_SESSION['logado']) && $_SESSION['logado'] === TRUE && isset($_SESSION['id'])) {
        $sql_query_proprietario = "SELECT foto_url FROM usuarios WHERE id = ? LIMIT 1";
        
        if ($stmt_proprietario = $conn->prepare($sql_query_proprietario)) {
            
            $stmt_proprietario->execute([$_SESSION['id']]);

            // Se encontrou o usuário
            if ($proprietario = $stmt_proprietario->fetch(PDO::FETCH_ASSOC)) {
                // Usa a foto do banco, ou o valor padrão se for nulo
                $foto_proprietario = $proprietario['foto_url'] ?: 'assets/img/icones/default-user.jpg';
            }
        } else {
            // Tratar erro de preparação (opcional: exibir mensagem, logar)
            // Por exemplo: echo "Erro na preparação da query: " . $conn->errorInfo()[2];
        }
    }
?>
<header>
    <nav class="navbar" aria-label="Barra de Navegação Principal">
        <div class="menu-responsivo">
            <div class="navbar-brand">
                <img class="logo" src="assets/img/icones/logo_sem_fundo2.png">
                <h1>Urbanline Imóveis</h1>
            </div>
            <div class="navbar-menu">
                <i class="fa-solid fa-bars" id="menu"></i>
            </div>
        </div>
        <ul class="navbar-items">
            <li class="navbar-link"><a href="index.php">Início</a></li>
            <li class="navbar-link"><a href="procura-imoveis.php">Procurar Imóvel</a></li>
            <?php

                if(isset($_SESSION['logado']) && $_SESSION['logado'] === TRUE) {
                    echo '<li class="navbar-link"><a href="../src/processos_antigos/logout.php">Sair da conta</a></li>';
                    echo '<i class="fa-solid fa-comment"></i>';
                    echo "<img src='$foto_proprietario' style='border-radius: 50%; width: 30px;' alt='Foto do Usuário'>";
                } else {
                    echo '<li class="navbar-link"><a href="cadastro.php">Cadastrar-se</a></li>';
                    echo '<li class="navbar-link"><a href="login.php">Entrar</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>