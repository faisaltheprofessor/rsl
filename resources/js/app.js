const revealElements = document.querySelectorAll('.reveal-up');

const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (!entry.isIntersecting) {
            return;
        }

        entry.target.classList.add('in-view');
        revealObserver.unobserve(entry.target);
    });
}, {
    threshold: 0.16,
});

revealElements.forEach((element) => revealObserver.observe(element));

const closeModal = (modal) => {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('modal-open');
};

const openModal = (modal) => {
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    modal.setAttribute('aria-hidden', 'false');
    document.body.classList.add('modal-open');
};

document.querySelectorAll('[data-modal-open]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
        const modal = document.querySelector(`[data-modal="${trigger.dataset.modalOpen}"]`);

        if (modal) {
            openModal(modal);
        }

        if (trigger.dataset.menuClose) {
            const menu = document.querySelector(`[data-menu="${trigger.dataset.menuClose}"]`);
            const toggle = document.querySelector(`[data-menu-toggle="${trigger.dataset.menuClose}"]`);

            menu?.classList.add('hidden');
            toggle?.setAttribute('aria-expanded', 'false');
        }
    });
});

document.querySelectorAll('[data-modal-close]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
        const modal = document.querySelector(`[data-modal="${trigger.dataset.modalClose}"]`);

        if (modal) {
            closeModal(modal);
        }
    });
});

document.addEventListener('keydown', (event) => {
    if (event.key !== 'Escape') {
        return;
    }

    document.querySelectorAll('[data-modal]').forEach((modal) => {
        if (modal.classList.contains('hidden')) {
            return;
        }

        closeModal(modal);
    });
});

document.querySelectorAll('[data-menu-toggle]').forEach((toggle) => {
    toggle.addEventListener('click', () => {
        const menu = document.querySelector(`[data-menu="${toggle.dataset.menuToggle}"]`);

        if (!menu) {
            return;
        }

        const isOpen = !menu.classList.contains('hidden');
        menu.classList.toggle('hidden', isOpen);
        toggle.setAttribute('aria-expanded', String(!isOpen));
    });
});

document.querySelectorAll('[data-menu-close]').forEach((link) => {
    link.addEventListener('click', () => {
        const menu = document.querySelector(`[data-menu="${link.dataset.menuClose}"]`);
        const toggle = document.querySelector(`[data-menu-toggle="${link.dataset.menuClose}"]`);

        menu?.classList.add('hidden');
        toggle?.setAttribute('aria-expanded', 'false');
    });
});

document.querySelectorAll('[data-carousel]').forEach((carousel) => {
    const slides = Array.from(carousel.querySelectorAll('[data-carousel-slide]'));
    const dots = Array.from(carousel.querySelectorAll('[data-carousel-dot]'));
    const prev = carousel.querySelector('[data-carousel-prev]');
    const next = carousel.querySelector('[data-carousel-next]');

    if (slides.length <= 1) {
        return;
    }

    let currentIndex = 0;
    let timer;

    const render = (index) => {
        currentIndex = (index + slides.length) % slides.length;

        slides.forEach((slide, slideIndex) => {
            const active = slideIndex === currentIndex;
            slide.classList.toggle('opacity-100', active);
            slide.classList.toggle('scale-100', active);
            slide.classList.toggle('translate-x-0', active);
            slide.classList.toggle('pointer-events-none', !active);
            slide.classList.toggle('opacity-0', !active);
            slide.classList.toggle('translate-x-[4%]', !active);
            slide.classList.toggle('scale-[1.03]', !active);
        });

        dots.forEach((dot, dotIndex) => {
            dot.setAttribute('aria-current', dotIndex === currentIndex ? 'true' : 'false');
        });
    };

    const restart = () => {
        window.clearInterval(timer);
        timer = window.setInterval(() => render(currentIndex + 1), 5000);
    };

    prev?.addEventListener('click', () => {
        render(currentIndex - 1);
        restart();
    });

    next?.addEventListener('click', () => {
        render(currentIndex + 1);
        restart();
    });

    dots.forEach((dot, dotIndex) => {
        dot.addEventListener('click', () => {
            render(dotIndex);
            restart();
        });
    });

    render(0);
    restart();
});
