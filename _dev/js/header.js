const hamburger = document.querySelector('.hamburger');
const headerLinks = document.querySelector('.headerLinks');
const header = document.querySelector('.header');
const rightBar = document.querySelector('.rightBar');
const pageHeight = window.innerHeight * 0.8;

const footerScrollUp = document.querySelector('.footerScrollUp');

const headerButtons = document.querySelectorAll('.headerLinks a');

hamburger.addEventListener('click', () => {
    header.classList.toggle('active');
    hamburger.classList.toggle('active');
    headerLinks.classList.toggle('active');
    rightBar.classList.toggle('active');
});

headerButtons.forEach((link) => {
    link.addEventListener('click', () => {
        header.classList.remove('active');
        hamburger.classList.remove('active');
        headerLinks.classList.remove('active');
        rightBar.classList.remove('active');
    });
});

window.onscroll = () => {
    let top = window.scrollY;
    top >= pageHeight ? header.classList.add('scrolled') : header.classList.remove('scrolled');
    top >= pageHeight ? footerScrollUp.classList.add('scrollUpShow') : footerScrollUp.classList.remove('scrollUpShow');
};
