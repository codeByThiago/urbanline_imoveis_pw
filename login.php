<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Acesso</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --cor-destaque: blue;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #3658b4 0%, #5088e2 50%, #80b2f0 100%);
        }

        #glass-effect {
            background: #fff;
            /* Fundo levemente branco com transparência */
            backdrop-filter: blur(10px);
            /* Efeito de desfoque no fundo */
            -webkit-backdrop-filter: blur(10px);
            /* Compatibilidade para Safari */
            border-radius: 0px 0px 15px #fff;
            /* Bordas arredondadas */
            border: 1px solid #fff;
            /* Borda suave */

            /* Efeito de sombra com luz branca */
            box-shadow: 0px 0px 15px #fff;
            /* Brilho branco suave */

        }
    </style>

</head>

<!-- UrbanLine Imóveis -->

<!-- UrbanLine Imóveis -->

<body class="min-h-screen flex items-center justify-center p-4">
    <h1>UrbanLine Imóveis<h1>
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

                <form class="space-y-4">
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

    <script>
        const loginTab = document.getElementById('loginTab');
        const cadastroTab = document.getElementById('cadastroTab');
        const loginContent = document.getElementById('loginContent');
        const cadastroContent = document.getElementById('cadastroContent');

        function showLogin() {
            loginTab.classList.add('bg-blue-600', 'text-white');
            loginTab.classList.remove('text-blue-600', 'hover:bg-blue-50');
            cadastroTab.classList.remove('bg-blue-600', 'text-white');
            cadastroTab.classList.add('text-blue-600', 'hover:bg-blue-50');

            loginContent.classList.remove('hidden');
            cadastroContent.classList.add('hidden');
        }

        function showCadastro() {
            cadastroTab.classList.add('bg-blue-600', 'text-white');
            cadastroTab.classList.remove('text-blue-600', 'hover:bg-blue-50');
            loginTab.classList.remove('bg-blue-600', 'text-white');
            loginTab.classList.add('text-blue-600', 'hover:bg-blue-50');

            cadastroContent.classList.remove('hidden');
            loginContent.classList.add('hidden');
        }

        loginTab.addEventListener('click', showLogin);
        cadastroTab.addEventListener('click', showCadastro);

        // Funcionalidade dos formulários
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                const isLogin = this.closest('#loginContent') !== null;
                const action = isLogin ? 'Login' : 'Cadastro';

                // Coleta os dados do formulário
                const formData = new FormData(this);
                const inputs = this.querySelectorAll('input');
                let data = {};

                inputs.forEach(input => {
                    if (input.value.trim()) {
                        data[input.placeholder.replace('Digite seu ', '').replace('Digite sua ', '')] = input.value;
                    }
                });

                // Simula processamento
                const button = this.querySelector('button');
                const originalText = button.textContent;
                button.textContent = 'Processando...';
                button.disabled = true;

            });
        });
    </script>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'96b66fb1453c6ea9',t:'MTc1NDU2NjE2Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
</body>

</html>