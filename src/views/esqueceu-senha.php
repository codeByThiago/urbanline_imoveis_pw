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
                <h1>Esqueceu a senha?</h1>
                <p>Esqueceu a senha? Sem problemas! Insira seu email para receber um link de verificação para trocar de senha!</p>
            </div>
        </div>
        <div class="form-login-content">
            <form action="../src/processos_antigos/envia-email.php" method="post" id="login-form">
                <h2>Urbanline Imóveis</h2>
                <div class="input-wrapper">
                    <i class="fa-solid fa-envelope"></i>
                    <label for="email" class="sr-only">Email:</label>
                    <input type="email" name="email" id="email" autocomplete="email" required placeholder="Digite seu email">
                </div>
                <button type="submit" class="login-submit-btn">Entrar</button>
                <p>Não possui cadastro? <a href="cadastro.php">Cadastre-se</a></p>
            </form>
        </div>
    </section>
</body>
</html>