const actualBtn = document.getElementById('imagens');
const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
    if (this.files.length > 1) {
        fileChosen.textContent = `${this.files.length} arquivos selecionados`;
    } else if (this.files.length === 1) {
        fileChosen.textContent = this.files[0].name;
    } else {
        fileChosen.textContent = "Nenhum arquivo escolhido";
    }
});