const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');

let currentIndex = 0;

function showSlide(index) {
    const newPosition = -index * 100 + '%';
    slider.style.transform = 'translateX(' + newPosition + ')';
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

setInterval(nextSlide, 3000); // 