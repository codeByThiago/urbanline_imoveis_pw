<?php 
session_start();

if(isset($_SESSION['logado']) && $_SESSION['logado'] === TRUE) {
    header('Location: index.php');
    exit();
}
?>
<body>
    <section id="login">
        <div id="welcome-content">
            <img src="assets/img/icones/logo_sem_fundo2.png" class="logo-icon" alt="Logo Urbanline Imóveis">
            <div>
                <p>Seja bem vindo á tela de</p>
                <h1>Login</h1>
                <p>Encontre o imóvel dos seus sonhos com os melhores preços!</p>
            </div>
        </div>
        <div class="form-login-content">
            <form action="../src/processos_antigos/realiza-login.php" method="post" id="login-form">
                <h2>Urbanline Imóveis</h2>
                <div class="input-wrapper">
                    <i class="fa-solid fa-envelope"></i>
                    <label for="email" class="sr-only">Email:</label>
                    <input type="email" name="email" id="email" autocomplete="email" required placeholder="Digite seu email">
                </div>
                <div class="input-wrapper">
                    <i class="fa-solid fa-key"></i>
                    <label for="senha" class="sr-only">Senha:</label>
                    <input type="password" name="senha" id="senha" autocomplete="current-password" required placeholder="Digite sua senha" min="8">
                    <button type="button" class="eye-password-viewer-btn" id="mostra-confirme-senha-btn">
                        <i class="fa-solid fa-eye" id='eye-confirme-senha'></i>
                    </button>
                </div>
                <div class="input-group">
                    <input type="checkbox" name="remind-me" id="remind-me">
                    <label for="remind-me">Lembrar-me neste dispositivo</label>
                </div>
                <button type="submit" class="login-submit-btn">Entrar</button>
                <p>Esqueceu a senha? <a href="esqueceu-senha.php">Clique aqui.</a></p>
                <p>Não possui cadastro? <a href="cadastro.php">Cadastre-se</a></p>
            </form>
        </div>
    </section>
    <script type="module" src="assets/js/senha.js"></script>
</body>
</html>