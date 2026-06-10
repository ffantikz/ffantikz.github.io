// Плавное появление элементов
const fadeElements = document.querySelectorAll('.program-card, .staff-card, .review-card, .stat-card, .about-text');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.1, rootMargin: "0px 0px -40px 0px" });
fadeElements.forEach(el => {
    el.classList.add('fade-up');
    observer.observe(el);
});

// Кнопка "наверх"
const toTopBtn = document.getElementById('toTopBtn');
if (toTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) toTopBtn.classList.add('show');
        else toTopBtn.classList.remove('show');
    });
    toTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// Подсветка активной страницы в меню
const currentPage = window.location.pathname.split('/').pop(); // например "about.html"
document.querySelectorAll('.nav a').forEach(link => {
    let linkHref = link.getAttribute('href');
    // Извлекаем только имя файла из href (убираем возможные слэши, параметры)
    let linkPage = linkHref.split('/').pop().split('?')[0];
    
    // Сравниваем имена файлов
    const isActive = (linkPage === currentPage) ||
                     (currentPage === '' && linkPage === 'index.html') ||
                     (currentPage === 'index.html' && linkPage === 'index.html');
    
    if (isActive) {
        link.style.color = '#e5ff00';
        link.style.fontWeight = 'bold';
    } else {
        link.style.color = '#06410e';
        link.style.fontWeight = 'bold';
    }
});
// Анимация счётчиков
function animateNumbers() {
    const statNumbers = document.querySelectorAll('.stat-number');
    statNumbers.forEach(el => {
        if (el.getAttribute('data-animated') === 'true') return;
        const rawText = el.innerText;
        const match = rawText.match(/(\d+)(\+?)/);
        if (!match) return;
        let target = parseInt(match[1]);
        const hasPlus = match[2] === '+';
        let current = 0;
        const step = Math.ceil(target / 30);
        const updateCounter = () => {
            current += step;
            if (current >= target) {
                el.innerText = target + (hasPlus ? '+' : '');
                el.setAttribute('data-animated', 'true');
                return;
            }
            el.innerText = current + (hasPlus ? '+' : '');
            requestAnimationFrame(updateCounter);
        };
        updateCounter();
    });
}
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateNumbers();
            statsObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });
document.querySelectorAll('.stats-row').forEach(el => statsObserver.observe(el));

// Модальная галерея
if (document.querySelector('.media-slider')) {
    const galleryItems = Array.from(document.querySelectorAll('.slider-item img'));
    const modalDiv = document.createElement('div');
    modalDiv.className = 'modal-gallery';
    modalDiv.innerHTML = `
        <div class="modal-close">&times;</div>
        <div class="modal-prev">&#10094;</div>
        <div class="modal-next">&#10095;</div>
        <img src="" alt="Увеличенное фото">
    `;
    document.body.appendChild(modalDiv);
    const modalImg = modalDiv.querySelector('img');
    let currentIndex = 0;
    function openModal(index) {
        currentIndex = (index + galleryItems.length) % galleryItems.length;
        modalImg.src = galleryItems[currentIndex].src;
        modalDiv.classList.add('active');
    }
    galleryItems.forEach((img, idx) => {
        img.style.cursor = 'pointer';
        img.addEventListener('click', (e) => {
            e.stopPropagation();
            openModal(idx);
        });
    });
    modalDiv.addEventListener('click', (e) => {
        if (e.target === modalDiv || e.target.classList.contains('modal-close'))
            modalDiv.classList.remove('active');
    });
    modalDiv.querySelector('.modal-prev').addEventListener('click', (e) => {
        e.stopPropagation();
        openModal(currentIndex - 1);
    });
    modalDiv.querySelector('.modal-next').addEventListener('click', (e) => {
        e.stopPropagation();
        openModal(currentIndex + 1);
    });
    document.addEventListener('keydown', (e) => {
        if (!modalDiv.classList.contains('active')) return;
        if (e.key === 'Escape') modalDiv.classList.remove('active');
        if (e.key === 'ArrowLeft') openModal(currentIndex - 1);
        if (e.key === 'ArrowRight') openModal(currentIndex + 1);
    });
}

// ===== БУРГЕР-МЕНЮ (рабочая версия) =====
function initBurger() {
    const headerContainer = document.querySelector('.header-container');
    if (!headerContainer) return;

    // Создаём кнопку бургера, если её ещё нет
    if (!document.querySelector('.burger')) {
        const burger = document.createElement('button');
        burger.innerHTML = '<i class="fas fa-bars"></i>';
        burger.className = 'burger';
        burger.setAttribute('aria-label', 'Меню');
        headerContainer.appendChild(burger);
    }

    // Создаём оверлей (затемнение)
    if (!document.querySelector('.overlay')) {
        const overlay = document.createElement('div');
        overlay.className = 'overlay';
        document.body.appendChild(overlay);
    }

    const burgerBtn = document.querySelector('.burger');
    const navMenu = document.querySelector('.nav');
    const overlay = document.querySelector('.overlay');

    function closeMenu() {
        navMenu.classList.remove('active');
        overlay.classList.remove('active');
        burgerBtn.innerHTML = '<i class="fas fa-bars"></i>';
    }

    function openMenu() {
        navMenu.classList.add('active');
        overlay.classList.add('active');
        burgerBtn.innerHTML = '<i class="fas fa-times"></i>';
    }

    burgerBtn.addEventListener('click', () => {
        if (navMenu.classList.contains('active')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    overlay.addEventListener('click', closeMenu);

    // Закрыть меню при клике на ссылку
    document.querySelectorAll('.nav a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // При изменении размера окна >768px принудительно закрываем меню
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768 && navMenu.classList.contains('active')) {
            closeMenu();
        }
    });
}

// Запускаем после загрузки DOM
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initBurger);
} else {
    initBurger();
}