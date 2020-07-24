document.querySelector('.hamburger').addEventListener('click', () => {
    document.querySelector('.nav-list').classList.toggle('nav-list-active');
    document.querySelectorAll('.nav-link').forEach((item) => {
        item.classList.toggle('nav-link-active');
    });
});

window.addEventListener('scroll', () => {
    document
        .querySelector('.navbar')
        .classList.toggle('navbar-alt', window.scrollY > 100);
    document
        .querySelector('.nav-list')
        .classList.toggle(
            'nav-list-alt',
            document.body.clientWidth < 800 && window.scrollY > 100
        );
});

const banner = document.querySelector('#main');
const about = document.querySelector('#about');
const services = document.querySelector('#services');
const contact = document.querySelector('#contact');

about.addEventListener('click', () => {
    document
        .querySelector('.about')
        .scrollIntoView({ behavior: 'smooth', block: 'center' });
});

services.addEventListener('click', () => {
    document
        .querySelector('.services')
        .scrollIntoView({ behavior: 'smooth', block: 'center' });
});

banner.addEventListener('click', () => {
    document
        .querySelector('.banner')
        .scrollIntoView({ behavior: 'smooth', block: 'center' });
});

contact.addEventListener('click', () => {
    document
        .querySelector('.contact')
        .scrollIntoView({ behavior: 'smooth', block: 'center' });
});
