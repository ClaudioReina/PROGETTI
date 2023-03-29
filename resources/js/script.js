/* motion */
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show1');
        } else {
            entry.target.classList.remove('show1');
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

// Navbar Fade
let navbar = document.querySelector('.navbar');
let userIcon = document.querySelector('.user-icon');
let btnSearch = document.querySelector('#btn-search');

let linkCustomActive = document.querySelectorAll('.linkCustomActive');


document.addEventListener('scroll', () => {
    if (window.scrollY>50) {
        // userIcon.classList.add('text-white');
        navbar.classList.add('navbar-dark');
        navbar.classList.add('bg_forNav','textNav');
        navbar.classList.remove('navbarColor');
        btnSearch.classList.replace('btn-outline-dark', 'btn-outline-light');
        linkCustomActive.forEach(linkCustomActive => {
            linkCustomActive.classList.remove('linkCustom');
            linkCustomActive.classList.add('linkCustom2')
        })
        
    } else {
        
        linkCustomActive.forEach(linkCustomActive => {
            linkCustomActive.classList.add('linkCustom');
            linkCustomActive.classList.remove('linkCustom2')
        })
        // userIcon.classList.remove('text-white');
        navbar.classList.remove('bg_forNav','textNav','navbar-dark')
        navbar.classList.add('navbarColor');
        btnSearch.classList.replace('btn-outline-light', 'btn-outline-dark');
    }
})

// Testo Homepage Categorie
let testi = ["Personalizzato!", "Originale!", "Accessibile!", "Sicuro!"];
        var indice = 0;
        
        /* setInterval(function() {
            document.getElementById("testo-cambiante").innerHTML = testi[indice];
            indice++;
            if (indice == testi.length) {
                indice = 0;
            }
        }, 1750); */
        setInterval(function() {
            var el = document.getElementById("testo-cambiante");
            if (el) {
                el.innerHTML = testi[indice];
                indice++;
                if (indice == testi.length) {
                    indice = 0;
                }
            }
        }, 1750);


        