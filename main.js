
//карусель
document.addEventListener("DOMContentLoaded", function() {
    const caruselContainer = document.querySelector('.carusel-img-container');
    const items = document.querySelectorAll('.carusel-item');
    const indicatorsContainers = document.querySelectorAll('.indicators');
    let totalItems = items.length;
    let currentIndex = 0;
    let timer;

    function updateCarusel() {
        setTimeout(() => {
            const offset = -currentIndex * 100 / totalItems;
            caruselContainer.style.transform = `translateX(${offset}%)`;
        },50); // Небольшая задержка перед применением изменений
    }
    

    function slideLeft() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateCarusel();
        updateIndicators();
        resetAutoplay();
    }

    function slideRight() {
        currentIndex = (currentIndex + 1) % totalItems;
        updateCarusel();
        updateIndicators();
        resetAutoplay();
    }

    function startAutoplay() {
        timer = setInterval(slideRight, 4700);
    }

    function stopAutoplay() {
        clearInterval(timer);
    }

    function resetAutoplay() {
        stopAutoplay();
        startAutoplay();
    }

    function updateIndicators() {
        indicatorsContainers.forEach((container, index) => {
            const indicators = container.querySelectorAll('.indicator');
            indicators.forEach((indicator, i) => {
                if (i === currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        });
    }

    startAutoplay();

    document.querySelector('.arrow-left').addEventListener('click', slideLeft);
    document.querySelector('.arrow-right').addEventListener('click', slideRight);

    // Добавление обработчиков клика для индикаторов
    indicatorsContainers.forEach((container, index) => {
        const indicators = container.querySelectorAll('.indicator');
        indicators.forEach((indicator, i) => {
            indicator.addEventListener('click', function() {
                currentIndex = i;
                updateCarusel();
                updateIndicators();
                resetAutoplay();
            });
        });
    });

    // Обновление индикаторов при загрузке страницы
    updateIndicators();
});