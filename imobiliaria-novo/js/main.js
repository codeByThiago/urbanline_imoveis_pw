document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.background-image');
    let currentIndex = 0;

    function nextImage() {
        images[currentIndex].classList.remove('active');
        
        currentIndex = (currentIndex + 1) % images.length;

        images[currentIndex].classList.add('active');
    }

    setInterval(nextImage, 4000)
})