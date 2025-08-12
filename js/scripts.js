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

(function () {
    function injectScript() {
        var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
        if (iframeDoc) {
            var script = iframeDoc.createElement('script');
            script.innerHTML =
                "window.__CF$cv$params = { r: '96b66fb1453c6ea9', t: 'MTc1NDU2NjE2Ny4wMDAwMDA=' }; " +
                "var a = document.createElement('script'); " +
                "a.nonce = ''; " +
                "a.src = '/cdn-cgi/challenge-platform/scripts/jsd/main.js'; " +
                "document.getElementsByTagName('head')[0].appendChild(a);";

            iframeDoc.getElementsByTagName('head')[0].appendChild(script);
        }
    }

    if (document.body) {
        var iframe = document.createElement('iframe');
        iframe.height = 1;
        iframe.width = 1;
        iframe.style.position = 'absolute';
        iframe.style.top = 0;
        iframe.style.left = 0;
        iframe.style.border = 'none';
        iframe.style.visibility = 'hidden';

        document.body.appendChild(iframe);

        if (document.readyState !== 'loading') {
            injectScript();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', injectScript);
        } else {
            var oldOnReadyStateChange = document.onreadystatechange || function () { };
            document.onreadystatechange = function (event) {
                oldOnReadyStateChange(event);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = oldOnReadyStateChange;
                    injectScript();
                }
            };
        }
    }
})();
