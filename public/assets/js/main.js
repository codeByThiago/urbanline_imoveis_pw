document.addEventListener("DOMContentLoaded", () => {
    const listaImagens = document.querySelectorAll(".background-image");
    let currentIndex = 0

    function showNextImage() {
        listaImagens[currentIndex].classList.remove("active");

        currentIndex = [currentIndex + 1] % listaImagens.length;

        listaImagens[currentIndex].classList.add("active");
    }

    setInterval(showNextImage, 4000)
});