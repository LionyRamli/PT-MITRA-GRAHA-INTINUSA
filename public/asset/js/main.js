let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
};

// SMOOTH SCROLLING ANIMATION
const scrollLink = document.querySelectorAll('.scroll-link');

function smoothScroll(target) {
    target = document.querySelector(target);
    const targetPosition = target.getBoundingClientRect().top;
    const startPos = window.pageYOffset;
    const endPos = targetPosition + startPos;
    const duration = 700;
    const startTime = null;
    function step(timestamp) {
        if (!startTime) startTime = timestamp;
        const timeElapsed = timestamp - startTime;
        const progress = Math.min(timeElapsed / duration, 1);
        const easingProgress = Math.pow(progress, 3); // easeInOutCubic
        window.scrollTo(0, (easingProgress * (endPos - startPos)) + startPos);
        if (timeElapsed < duration) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
}

scrollLink.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        smoothScroll(link.hash);
    });
});