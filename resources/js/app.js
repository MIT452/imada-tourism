import './bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('[data-reveal]');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        items.forEach((el) => observer.observe(el));
    } else {
        items.forEach((el) => el.classList.add('is-visible'));
    }

    document.querySelectorAll('.photo-slot img').forEach((img) => {
        img.addEventListener('error', function () {
            this.closest('.photo-slot').classList.add('img-missing');
        });
    });
});