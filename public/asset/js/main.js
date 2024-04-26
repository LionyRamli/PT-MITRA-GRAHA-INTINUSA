let navbar = document.querySelector('.header .navbar');
let searchForm = document.querySelector('.header .search-form');
let contactInfo = document.querySelector('.contact-info');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    contactInfo.classList.remove('active');
};

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    contactInfo.classList.remove('active');
};

document.querySelector('#info-btn').onclick = () => {
    contactInfo.classList.add('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

document.querySelector('#close-contact-info').onclick = () => {
    contactInfo.classList.remove('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    contactInfo.classList.remove('active');
}

$(document).ready(function(){
    var swiper = new Swiper(".", {
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});


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

