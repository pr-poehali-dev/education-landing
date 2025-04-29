/**
 * Main JavaScript file for the Educational Course Landing theme
 */

(function() {
    // Инициализация свайперов/слайдеров, если они есть на странице
    if (typeof Swiper !== 'undefined') {
        // Инициализация слайдера отзывов, если он существует
        const testimonialsContainer = document.querySelector('.testimonials-slider');
        if (testimonialsContainer) {
            const testimonialsSwiper = new Swiper('.testimonials-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });
        }
    }

    // Анимация при скролле - элементы появляются при прокрутке
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    
    function handleScrollAnimation() {
        animateElements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 100) {
                element.classList.add('appear');
            }
        });
    }
    
    // Первичная проверка видимых элементов
    if (animateElements.length > 0) {
        handleScrollAnimation();
        window.addEventListener('scroll', handleScrollAnimation);
    }

    // Валидация формы
    const contactForm = document.querySelector('.wpcf7-form');
    if (contactForm) {
        const formInputs = contactForm.querySelectorAll('input, textarea');
        
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (this.value === '') {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    }

    // Счетчик статистики с анимацией
    function animateCounter(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            element.textContent = value;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                element.textContent = end;
            }
        };
        window.requestAnimationFrame(step);
    }

    const statValues = document.querySelectorAll('.stat-value');
    let hasAnimated = false;

    function handleStatisticsAnimation() {
        if (hasAnimated) return;
        
        const statsContainer = document.querySelector('.stats-container');
        if (!statsContainer) return;
        
        const containerPosition = statsContainer.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (containerPosition < windowHeight - 100) {
            statValues.forEach(value => {
                const finalValue = parseInt(value.textContent, 10);
                animateCounter(value, 0, finalValue, 2000);
            });
            hasAnimated = true;
            window.removeEventListener('scroll', handleStatisticsAnimation);
        }
    }

    if (statValues.length > 0) {
        window.addEventListener('scroll', handleStatisticsAnimation);
        // Проверяем, видны ли статистические элементы при загрузке страницы
        handleStatisticsAnimation();
    }
})();
