/* motion */
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

const hiddenLeftElements = document.querySelectorAll('.hidden-left');
hiddenLeftElements.forEach((el) => observer.observe(el));

const hiddenRightElements = document.querySelectorAll('.hidden-right');
hiddenRightElements.forEach((el) => observer.observe(el));

const hiddenDownElements = document.querySelectorAll('.hidden-down');
hiddenDownElements.forEach((el) => observer.observe(el));

const hiddenUpElements = document.querySelectorAll('.hidden-up');
hiddenUpElements.forEach((el) => observer.observe(el));


/* navbar fade */
let navbar = document.querySelector('.navbar');
let userIcon = document.querySelector('.user-icon');

document.addEventListener('scroll', () => {
    if (window.scrollY>50) {
        userIcon.classList.add('text-white');
        navbar.classList.add('navbar-dark');
        navbar.classList.add('bg_forNav','textNav');
    } else {
        userIcon.classList.remove('text-white');
        navbar.classList.remove('bg_forNav','textNav','navbar-dark')
    }
})


