<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">

        <video autoplay muted loop playsinline id="myVideo">
            <source src="<?php echo get_stylesheet_directory_uri() . '/video.mp4'; ?> " type="video/mp4" />
        </video>
        <div class="contener__logo">
            <img class="banner__logo " src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </div>

    </section>

    <section id="story" class="story animUp">
        <h2><span class="title title_active">L'histoire</span></h2>

        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <!-- 'Characters' déplacé dans template-parts\characters-slider.php -->
        <?php
        // include_once ( 'template-parts/characters-slider.php' ); 
        get_template_part('template-parts/characters', 'slider');
        ?>


        <article id="place">
            <!--les nuages -->
            <img class="big__cloud cloud" src="<?php echo get_stylesheet_directory_uri() . '/images/big_cloud.png'; ?> " alt="big cloud">
            <img class="little__cloud cloud" src="<?php echo get_stylesheet_directory_uri() . '/images/little_cloud.png'; ?> " alt="little cloud">
            <div>
                <div>
                    <h3> <span class="title title_active"> Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

        </article>



    </section>


    <section id="studio">
        <h2><span class="title title_active">Studio</span> <span class="title title_active">Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>



    <!--section ajoutee et déplacé dans template-parts/nomination-oscar.php-->
    <?php
    // include_once ( 'template-parts/nomination-oscar.php' ); 
    get_template_part('template-parts/nomination', 'oscar');
    ?>







</main><!-- #main -->

<?php
get_footer();
