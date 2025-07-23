

// ***********************************Menu-burger********************************************
//le script monScript ne sera exécuté qu'une fois que le DOM de la page HTML a été complètement chargé,
//pour garantir que tous les éléments HTML sont prêts à être manipulés par le script.
document.addEventListener("DOMContentLoaded", function () {
    monScript();
});

function monScript() {

    // Gestion de la fermeture et de l'ouverture de menu avec jQuery
    (function ($) {
        $(".modal__burger").click(function () {
            console.log("cliqué");
            //anime height pour apparaître en augmentant progressivement sa hauteur jusqu'à sa taille normale. 
            $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000);
            // Toggle de la classe "open" pour gérer l'état du menu
            $(".modal__content").toggleClass("open");
            $(".modal__open").toggleClass("close");
        });
        $("a").click(function () {
            console.log("a");
            // Si le menu est ouvert, le fermer lorsqu'un lien est cliqué
            if ($(".modal__content").hasClass("open")) {
                $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1500);
                $(".modal__content").removeClass("open");
                $(".modal__burger").removeClass("close");
            }
        });
    })(jQuery);
}







// ************************************Les animations des titres *****************************

const targets = document.querySelectorAll('.title');

function handleIntersection(entries) {
    // parcourt chaque objet entry dans la liste entries.
    entries.forEach(entry => {
        //retire la classe 'title_active' de l'élément observé.
        entry.target.classList.remove('title_active');
        //Vérifie si l'élément est en train d'entrer dans la zone visible.
        if (entry.isIntersecting) {
            entry.target.classList.add('title_active');
        }
    });
}

const observer = new IntersectionObserver(handleIntersection);
//Pour chaque élément ciblé par la variable targets, 
//l'observateur observe s'il entre ou sort de la zone visible.
//Appelle la fonction à chaque fois qu'un élément avec la classe 'title' entre dans la zone visible.
targets.forEach(target => observer.observe(target));





//***********************************Le paralax du logo*****************************************



document.addEventListener('DOMContentLoaded', function () {
    const bannerLogo = document.querySelector('.banner__logo');

    // Ajoutez la classe "animUp" au chargement de la page
    bannerLogo.classList.add('animLogo');


    // Gérez le mouvement "translateY" lors du défilement
    document.addEventListener('scroll', function () {
        const banner = document.querySelector('.banner');
        //récupère la position de défilement verticale de la page.
        const scrollPosition = window.scrollY;
        const maxTranslateY = banner.offsetHeight - bannerLogo.offsetHeight - 180;
        // Limite la valeur de translateY pour ne pas dépasser maxTranslateY,
        // afin de garantir que l'élément reste dans la vue de son parent .banner
        //Math.min est utilisé pour s'assurer que la valeur ne dépasse pas un certain maximum
        const translateY = Math.min(maxTranslateY, scrollPosition * 0.5);

        // Appliquez le mouvement "translateY"
        if (translateY < maxTranslateY) {
            bannerLogo.style.transform = 'translateY(' + translateY + 'px)';
            //ajout les animations 
            bannerLogo.classList.remove('animLogo');



        }
    });
});



//********************************Le paralax des nuages *****************************************



// Récupère tous les éléments avec la classe "cloud"
const nuages = document.querySelectorAll('.cloud');
const place = document.getElementById('place');
console.log(nuages);
let posX = 0;// la position horizontale actuelle des nuages.
const speed = 0.2; // la vitesse de paralax
// Déclenche l'effet de parallaxe lors du scroll
window.addEventListener('scroll', function () {
    // Parcourt tous les éléments avec la classe "cloud"
    nuages.forEach(nuage => {
        // Calcule la position horizontale des éléments "cloud" en fonction du défilement de
        // la page et de la position de l'élément "place"
        // en soustrayant la position de défilement verticale de la fenêtre par rapport à 
        //la position de l'élément "place" dans le document.
        posX = Math.round(speed * (0 - (window.scrollY - place.offsetTop - 100)));

        //Vérifie que l'élément n'est pas déplacé vers la droite de sa position initiale,
        // et Vérifie que l'élément n'est pas déplacé au-delà de 400 pixels vers la gauche par rapport à sa position initiale
        if (posX <= 0 && posX > -400) {
            // Applique la position horizontale au nuage
            nuage.style.transform = `translateX(${posX}px)`;
        }
    });
});













//******************************************Initialize Swiper *****************************************


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 60,
    speed: 1500,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

});

console.log(swiper);


