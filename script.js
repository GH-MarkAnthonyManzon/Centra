// FAQ Toggle Button Logic
document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
        document.querySelectorAll('.faq-item').forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
            }
        });

        item.classList.toggle('active');
    });
});

// Smooth Scroll
const lenisScript = document.createElement('script');
lenisScript.src = "https://unpkg.com/lenis@1.1.13/dist/lenis.min.js";
lenisScript.onload = () => {
    const lenis = new Lenis();
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);
};
document.head.appendChild(lenisScript);


// Glass Navbar & Dark Mode Detection
const navbar = document.querySelector('.navbar');
const darkSections = document.querySelectorAll('.dark-section, .brand-section');

if (navbar && darkSections.length > 0) {
    window.addEventListener('scroll', () => {
        let isOverDarkSection = false;

        const navRect = navbar.getBoundingClientRect();
        const navCenter = navRect.top + (navRect.height / 2);

        darkSections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (navCenter >= rect.top && navCenter <= rect.bottom) {
                isOverDarkSection = true;
            }
        });

        if (isOverDarkSection) {
            navbar.classList.add('nav-dark-mode');
        } else {
            navbar.classList.remove('nav-dark-mode');
        }
    });
}

// 3D Card Hover Tilt
const tiltCard = document.querySelector('.visual-placeholder-box');
if (tiltCard) {
    tiltCard.addEventListener('mousemove', (e) => {
        const rect = tiltCard.getBoundingClientRect();

        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = ((y - centerY) / centerY) * -4;
        const rotateY = ((x - centerX) / centerX) * 4;

        tiltCard.style.transform = `perspective(1000px) scale(0.99) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });

    tiltCard.addEventListener('mouseleave', () => {
        tiltCard.style.transform = `perspective(1000px) scale(1) rotateX(0deg) rotateY(0deg)`;
    });
}
