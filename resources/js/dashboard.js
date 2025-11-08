// Navbar Toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Animation on scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (elementTop < windowHeight - 100) {
                element.classList.add('animate-fade-in');
            }
        });
    };

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Initial check

    // Stats counter animation
    const stats = document.querySelectorAll('.stat-number');
    stats.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;

        const updateCounter = () => {
            if (current < target) {
                current += increment;
                stat.textContent = Math.ceil(current);
                setTimeout(updateCounter, 10);
            } else {
                stat.textContent = target;
            }
        };

        updateCounter();
    });
});

// Header parallax effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    const scrolled = window.pageYOffset;
    if (header) {
        header.style.backgroundPositionY = scrolled * 0.5 + 'px';
    }
});

// FAQ Accordion animation
document.querySelectorAll('details').forEach(detail => {
    detail.addEventListener('toggle', e => {
        if (detail.open) {
            const summary = detail.querySelector('summary');
            const content = detail.querySelector('p');
            if (content) {
                content.style.maxHeight = content.scrollHeight + 'px';
                content.style.opacity = '1';
            }
        }
    });
});
