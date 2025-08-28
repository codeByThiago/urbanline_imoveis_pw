<?php
    include("../src/includes/header.php");
?>

<script src="https://cdn.tailwindcss.com"></script>

<main class="min-h-screen flex items-center justify-center p-4 fundo_gradiente">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden" id="glass-effect">

        <!-- Header com abas -->
        <div class="flex bg-gray-50">
            <button id="loginTab" class="flex-1 py-4 px-6 text-center font-semibold transition-all duration-300 bg-blue-600 text-white">
                Login
            </button>
            <button id="cadastroTab" class="flex-1 py-4 px-6 text-center font-semibold transition-all duration-300 text-blue-600 hover:bg-blue-50">
                Cadastro
            </button>
        </div>

        <!-- Conteúdo das abas -->
        <div class="p-8">
            <!-- Aba Login -->
            <div id="loginContent" class="space-y-6">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Bem-vindo de volta!</h2>
                    <p class="text-gray-600">Entre com suas informações</p>
                </div>

                <form action="process-login.php" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Digite seu email">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Senha</label>
                        <input type="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Digite sua senha">
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 mt-6">
                        Entrar
                    </button>
                </form>
            </div>

            <!-- Aba Cadastro -->
            <div id="cadastroContent" class="space-y-6 hidden">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Criar conta</h2>
                    <p class="text-gray-600">Preencha os dados para se cadastrar</p>
                </div>

                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nome</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Digite seu nome completo">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Telefone</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Digite seu email">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="number" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Digite seu email">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Senha</label>
                        <input type="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" placeholder="Digite sua senha">
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 mt-6">
                        Cadastrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="js/main.js"></script>

<?php
    include("../src/includes/footer.php");
?>