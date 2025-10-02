<form action="upload.php" method="POST" enctype="multipart/form-data">
    <h1>Cadastro</h1>
    <div class="input-group">
        <label for="nome">Digite seu nome</label>
        <input type="text" name="nome" id="nome">
    </div>

    <div class="input-group">
        <label for="email">Digite seu email</label>
        <input type="text" name="email" id="email">
    </div>

    <div class="input-group">
        <label for="senha">Digite sua senha</label>
        <input type="password" name="senha" id="senha">
    </div>

    <div class="input-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" regex='/\(?\d{2}\)?\s?(\d{4,5})-?\d{4}$/'>
    </div>

    <div class="input-group">
        <label for="cpf-cnpj">CPF ou CNPJ</label>
        <input type="text" name="cpf-cnpj" id="cpf-cnpj">
    </div>

    <label for="fotos">Selecione a foto de perfil:</label><br>
    <input type="file" name="foto" id="foto" accept="image/*"><br><br>

    <button type="submit">Cadastrar</button>
</form>

<script>
</script>