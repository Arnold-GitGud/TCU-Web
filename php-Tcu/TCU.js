document.addEventListener("DOMContentLoaded", function () {
    let currentIndex = 0;
    const slides = document.querySelectorAll(".carousel-item");
    const totalSlides = slides.length;
    const dots = document.querySelectorAll(".dot");
    const carouselInner = document.querySelector(".carousel-inner");

    function updateCarousel() {
        carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;

        // Update active dot
        dots.forEach(dot => dot.classList.remove("active"));
        dots[currentIndex].classList.add("active");
    }

    function moveSlide(step) {
        currentIndex = (currentIndex + step + totalSlides) % totalSlides; // Ensures proper looping
        updateCarousel();
    }

    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
    }

    // Attach event listeners to navigation buttons
    document.querySelector(".prev").addEventListener("click", function () {
        moveSlide(-1);
    });

    document.querySelector(".next").addEventListener("click", function () {
        moveSlide(1);
    });

    // Attach event listeners to dots
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => goToSlide(index));
    });

    // Set initial active dot
    dots[currentIndex].classList.add("active");
});

function toggleMenu() {
    document.querySelector('.side-menu').classList.toggle('active');
}
