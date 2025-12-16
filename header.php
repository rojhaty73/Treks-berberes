<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php if (is_front_page()) : ?>
      <div class="hero-wrapper">
        <div class="hero-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/hero.jpg" alt="Hero">
          <div class="hero-overlay"></div>
        </div>
    <?php endif; ?>
    
    <header class="header">
      <div class="container">
        <div class="header-content">
          <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
          </div>
          
          <nav class="main-nav">
            <?php 
              wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'menu_class' => 'nav-menu',
                'container' => false
              )); 
            ?>
          </nav>

          <div class="header-right-image">
  <a href="#contact" class="btn-contact">
    <img src="<?php echo get_template_directory_uri(); ?>/img/Accueil/contour blanc.svg" alt="">
    <span>Contact</span>
  </a>
</div>
        </div>
      </div>
    </header>