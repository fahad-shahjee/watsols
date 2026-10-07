document.addEventListener('DOMContentLoaded', function () {
    initBannerVideo();
    initNavLink();
    initSidebar();
    initCounter();
    initAnimateData();
    initSwipers();
});

function initBannerVideo() {
    const video = document.getElementById('banner-video-background');
    if (video) {
        // Ensure video plays automatically (ignore browser autoplay restrictions)
        video.play().catch(() => {});
    }
}

function initCounter() {
    function updateCount(counter) {
        const target = +counter.dataset.target;
        const count = +counter.textContent.replace('+', '');
        const duration = 2000;
        const steps = 60;
        const increment = Math.max(1, Math.ceil(target / steps));
        const delay = Math.floor(duration / (target / increment));

        if (count < target) {
            counter.textContent = Math.min(target, count + increment);
            setTimeout(() => updateCount(counter), delay);
        } else {
            counter.textContent = target;
        }
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                updateCount(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    document.querySelectorAll('.counter').forEach(el => observer.observe(el));
}

function initNavLink() {
    const currentUrl = window.location.href;
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('active');
        }
    });
}

function initSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const overlay = document.querySelector('.sidebar-overlay');
    if (!sidebar || !overlay) return;

    const open = () => {
        overlay.classList.add('active');
        setTimeout(() => sidebar.classList.add('active'), 200);
    };
    const close = () => {
        sidebar.classList.remove('active');
        setTimeout(() => overlay.classList.remove('active'), 200);
    };

    document.querySelectorAll('.nav-btn').forEach(btn => btn.addEventListener('click', open));
    document.querySelectorAll('.close-btn').forEach(btn => btn.addEventListener('click', close));
    overlay.addEventListener('click', close);
}

function initAnimateData() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const delay = el.dataset.delay || 0;
                setTimeout(() => {
                    el.classList.add(el.dataset.animate);
                    el.style.opacity = 1;
                    observer.unobserve(el);
                }, delay);
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));
}

function initSwipers() {
    if (typeof Swiper === 'undefined') return;

    if (document.querySelector('.swiper.swiperPartner')) {
        new Swiper('.swiper.swiperPartner', {
            autoplay: {
                delay: 1000,
            },
            speed: 500,
            slidesPerView: 6,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            breakpoints: {
                1025: {
                    slidesPerView: 6
                },
                767: {
                    slidesPerView: 4
                },
                230: {
                    slidesPerView: 3
                }
            },
        });
    }

    if (document.querySelector('.swiper.swiperTestimonial')) {
        new Swiper('.swiper.swiperTestimonial', {
            autoplay: {
                delay: 5000,
            },
            speed: 1000,
            slidesPerView: 3,
            spaceBetween: 50,
            loop: true,
            grabCursor: true,
            breakpoints: {
                1025: {
                    slidesPerView: 3,
                },
                769: {
                    slidesPerView: 2
                },
                319: {
                    slidesPerView: 1,
                },
            },
        });
    }
}
