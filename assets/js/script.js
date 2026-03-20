const burgerButton = document.getElementById('burger');
const mobileMenu = document.getElementById('mobile-menu');
const crossBtn = document.getElementById('cross-btn');

burgerButton.addEventListener('click', function () {
    mobileMenu.classList.add('opened');
});

crossBtn.addEventListener('click', function () {
    mobileMenu.classList.remove('opened');
});

const currentYears = document.querySelectorAll(".currentYear");
currentYears.forEach((currentYear) => {
    currentYear.innerHTML = new Date().getFullYear();
});

document.addEventListener('DOMContentLoaded', function () {
    let links = document.querySelectorAll("a[href$='#registerForm']");

    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function (event) {
            event.preventDefault();
            let target = document.getElementById("registerForm");
            let offsetTop = target.getBoundingClientRect().top + window.scrollY - 100;

            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        });
    }
});

const langSelect = document.getElementById('lang-select');
const langMenu = document.getElementById('lang-menu');

langSelect.addEventListener('click', (e) => {
    if (e.target.closest('#lang-menu')) return;
    e.stopPropagation();
    langMenu.classList.toggle('opened');
});

document.addEventListener('click', (e) => {
    if (!langSelect.contains(e.target)) langMenu.classList.remove('opened');
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') langMenu.classList.remove('opened');
});

const form = document.getElementById('form');
const box  = document.getElementById('formMessage');
let hideTimer = null;

function showMessage(text) {
    box.className = 'form-message show success';
    clearTimeout(hideTimer);
    hideTimer = setTimeout(() => {
        box.className = 'form-message';
    }, 5000);
}

if (form) {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }
        form.reset();
        showMessage();
    });
}





