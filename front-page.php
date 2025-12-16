<?php
get_header();
?>

<main class="site-main">
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">Partez à la découverte<br>du monde berbère</h1>
            <p class="hero-subtitle">Quel type de trek est fait pour vous ?</p>
            
            <div class="hero-buttons">
                <a href="#trek-desert" class="btn-hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/contour blanc 2.svg" alt="">
                    <span>Familial</span>
                </a>
                
                <a href="#trek-mont" class="btn-hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/contour blanc 2.svg" alt="">
                    <span>Intermédiaire</span>
                </a>
                
                <a href="#trek-oasis" class="btn-hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/contour blanc 2.svg" alt="">
                    <span>Sportif</span>
                </a>
            </div>
            <div class="hero-arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/fleche-bas.svg" alt="">
            </div>
        </div>
    </section>

<?php if (is_front_page()) : ?>
    </div> <!-- Ferme .hero-wrapper -->
<?php endif; ?>

    <section class="intro-section">
        <div class="container">
            <h2 class="intro-title">Trek au Maroc : l'aventure berbère<br>authentique et sur mesure</h2>
            <p class="intro-description">Des sommets de l'Atlas aux dunes du Sahara, <strong>découvrez le Maroc</strong> autrement. <strong>Ici pas de tourisme de masse, </strong><br>ni de circuits figés. Randonnée sportive, ski de randonnées, balade en famille et bien plus : nous créons votre <br> <strong>voyage 100% à la carte, </strong>pour une <strong>immersion authentique</strong> au cœur de la nature et de la culture Berbère.</p>
            <div class="intro-cta">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/point blanc.svg" alt="" class="cta-dot-left">
                <a href="#contact" class="btn-cta">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/bouton noir.svg" alt="">
                    <span>Imaginez votre trek</span>
                </a>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/point blanc.svg" alt="" class="cta-dot-right">
            </div>
        </div>
    </section>

    <section class="blue-section">
        <div class="container">
            <div class="blue-section-header">
                <h2 class="blue-section-title">Les paysages époustouflants</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/point blanc.svg" alt="" class="blue-section-dot">
            </div>
            
            <div class="paysages-gallery">
                <div class="paysage-item">
                    <div class="paysage-placeholder"></div>
                    <p class="paysage-label">Haut Atlas central</p>
                    <p class="paysage-description">L'aventure brute sur le toit<br>du monde.</p>
                </div>
                <div class="paysage-item">
                    <div class="paysage-placeholder"></div>
                    <p class="paysage-label">Côte atlantique</p>
                    <p class="paysage-description">Vibrez au rythme des<br>marées atlantiques.</p>
                </div>
                <div class="paysage-item">
                    <div class="paysage-placeholder"></div>
                    <p class="paysage-label">Désert Sahara</p>
                    <p class="paysage-description">L'oasis infinie aux portes<br>du désert.</p>
                </div>
            </div>
            
            <div class="paysages-cta">
                <a href="#" class="btn-paysage">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/contour noir.svg" alt="">
                    <span>Découvrez en plus</span>
                </a>
            </div>
        </div>
    </section>

    <section class="guide-section">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/Image guide.jpg" 
                 srcset="<?php echo get_template_directory_uri(); ?>/img/Accueil/Image guide@2x.jpg 2x" 
                 alt="Guide" 
                 class="guide-image">
            
            <!-- Premier groupe -->
            <span class="guide-plus">+</span>
            <span class="guide-number-1">35</span>
            <span class="guide-years">années <br>d'expérience</span>
            
            <!-- Deuxième groupe -->
            <span class="guide-plus-2">+</span>
            <span class="guide-number-2">40</span>
            <span class="guide-years-2">millions de km <br> parcourus</span>
            
            <!-- Troisième groupe -->
            <span class="guide-plus-3">+</span>
            <span class="guide-number-3">10k</span>
            <span class="guide-years-3">personnes <br> guidées</span>
            
            <h2 class="guide-title">Votre guide berbère : <br>passion, expérience et <br>authenticité</h2>
            <p class="guide-bio">Je suis né à Aremd, au pied du <strong>Toubkal</strong>, et j'explore ces montagnes depuis toujours. <br><br>Guide diplômé depuis plus de <strong>35 ans,</strong> spécialisé en ski de randonnée, j'organise des treks <strong>sur mesure</strong> dans le Haut Atlas, le Moyen Atlas, l'Anti-Atlas et le désert du Sahara. Avec moi, vous vivez un <strong>trek <br>berbère authentique, </strong>pensé selon vos envies.</p>
            <div class="guide-buttons">
                <a href="#contact" class="btn-guide-contact">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/fond noir 2.svg" alt="">
                    <span>Contactez moi</span>
                </a>
                <a href="#" class="btn-guide-more">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/contour noir 2.svg" alt="">
                    <span>En savoir plus</span>
                </a>
            </div>
            <div class="guide-text-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/grand point blanc.svg" alt="" class="guide-dot-left">
                <p class="guide-description">Le trek est une activité de randonnée de longue durée qui consiste à marcher plusieurs jours en pleine <br>nature, souvent sur des sentiers difficiles, afin de découvrir des paysages et de se dépasser <br>physiquement et mentalement.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/grand point blanc.svg" alt="" class="guide-dot-right">
            </div>
        </div>
    </section>

  <section class="avis">
    <div class="container">
        <h2 class="avis-title">Ils ont marché avec Houssaïne</h2>
        
        <div class="avis-carousel">
            <div class="avis-slides-wrapper">
                <!-- Slide 1 -->
                <div class="avis-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/avis droit.JPG" alt="" class="avis-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/feu.JPG" alt="" class="avis-feu">
                    <p class="avis-text">Un trek inoubliable ! Houssaïne connaît chaque <br> vallée et partage sa culture avec une générosité <br> incroyable. Nous avons découvert l'Atlas <br> autrement, entre rencontres, paysages grandioses <br> et une organisation parfaite. Je recommande <br> vivement.</p>
                    <p class="avis-author">P. Lace Holder</p>
                </div>
                
                <!-- Slide 2 -->
                <div class="avis-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/avis droit.JPG" alt="" class="avis-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/feu.JPG" alt="" class="avis-feu">
                    <p class="avis-text">Un trek inoubliable ! Houssaïne connaît chaque <br> vallée et partage sa culture avec une générosité <br> incroyable. Nous avons découvert l'Atlas <br> autrement, entre rencontres, paysages grandioses <br> et une organisation parfaite. Je recommande <br> vivement.</p>
                    <p class="avis-author">Rojhat</p>
                </div>
                
                <!-- Slide 3 -->
                <div class="avis-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/avis droit.JPG" alt="" class="avis-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/feu.JPG" alt="" class="avis-feu">
                    <p class="avis-text">Un trek inoubliable ! Houssaïne connaît chaque <br> vallée et partage sa culture avec une générosité <br> incroyable. Nous avons découvert l'Atlas <br> autrement, entre rencontres, paysages grandioses <br> et une organisation parfaite. Je recommande <br> vivement.</p>
                    <p class="avis-author">Alexis</p>
                </div>
                
                <!-- Slide 4 -->
                <div class="avis-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/avis droit.JPG" alt="" class="avis-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/feu.JPG" alt="" class="avis-feu">
                    <p class="avis-text">Un trek inoubliable ! Houssaïne connaît chaque <br> vallée et partage sa culture avec une générosité <br> incroyable. Nous avons découvert l'Atlas <br> autrement, entre rencontres, paysages grandioses <br> et une organisation parfaite. Je recommande <br> vivement.</p>
                    <p class="avis-author">Medelys</p>
                </div>
            </div>
        </div>
        
        <button class="avis-arrow-left" onclick="changeSlide(-1)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/fleche-de-gauche.svg" alt="">
        </button>
        <button class="avis-arrow-right" onclick="changeSlide(1)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/fleche-de-droite.svg" alt="">
        </button>
        
        <div class="avis-dots">
            <button class="avis-dot active" onclick="goToSlide(0)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/caroussel noir.svg" alt="" class="dot-active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/caroussel blanc.svg" alt="" class="dot-inactive">
            </button>
            <button class="avis-dot" onclick="goToSlide(1)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/caroussel noir.svg" alt="" class="dot-active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/caroussel blanc.svg" alt="" class="dot-inactive">
            </button>
            <button class="avis-dot" onclick="goToSlide(2)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/caroussel noir.svg" alt="" class="dot-active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/caroussel blanc.svg" alt="" class="dot-inactive">
            </button>
            <button class="avis-dot" onclick="goToSlide(3)">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/caroussel noir.svg" alt="" class="dot-active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/caroussel blanc.svg" alt="" class="dot-inactive">
            </button>
        </div>
    </div>
</section>


<section class="aventure">
    <div class="aventure-line-bg"></div>
    
    <div class="aventure-content">
        <div class="aventure-box">
            <h2 class="aventure-title">Envie de partir à l'aventure ?</h2>
            <a href="#contact" class="btn-aventure">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/fond noir 3.svg" alt="">
                <span>Contactez moi</span>
            </a>
            <a href="#carnet" class="btn-aventure-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/contour blanc 5.svg" alt="">
                <span>Carnet de voyage</span>
            </a>
        </div>
    </div>
    
    <div class="aventure-slider">
        <div class="aventure-track">
            <!-- Premier set d'images -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/photo1.jpg" alt="" class="aventure-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/photo2.jpg" alt="" class="aventure-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/photo3.jpg" alt="" class="aventure-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/photo4.jpg" alt="" class="aventure-photo">
            
            <!-- Dupliquer pour la boucle infinie -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/photo1.jpg" alt="" class="aventure-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/photo2.jpg" alt="" class="aventure-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/photo3.jpg" alt="" class="aventure-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/photo4.jpg" alt="" class="aventure-photo">
        </div>
    </div>
</section>
<script>
let currentSlide = 0;
const slidesWrapper = document.querySelector('.avis-slides-wrapper');
const slides = document.querySelectorAll('.avis-slide');
const dots = document.querySelectorAll('.avis-dot');
let autoSlideInterval;

function showSlide(n) {
    // Boucle si on dépasse
    if (n >= slides.length) {
        currentSlide = 0;
    } else if (n < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = n;
    }
    
    // Déplacer le wrapper
    slidesWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    // Mettre à jour les dots
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentSlide].classList.add('active');
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
    resetAutoSlide();
}

function goToSlide(n) {
    showSlide(n);
    resetAutoSlide();
}

function autoSlide() {
    changeSlide(1);
}

function startAutoSlide() {
    autoSlideInterval = setInterval(autoSlide, 5000);
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// Initialiser
showSlide(0);
startAutoSlide();

// Pause au survol
document.querySelector('.avis-carousel').addEventListener('mouseenter', () => {
    clearInterval(autoSlideInterval);
});

document.querySelector('.avis-carousel').addEventListener('mouseleave', () => {
    startAutoSlide();
});
</script>
</main>

<?php
get_footer();
?>