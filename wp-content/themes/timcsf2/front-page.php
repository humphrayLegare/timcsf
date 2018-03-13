<?php get_header(); ?>

<main class="h_main grid">
  <?php if( !function_exists('get_field'))  return; ?>

    <section class="h_carousel">
    <img class="the_background" alt="ordinateur" src="wp-content/uploads/2018/02/carousel.jpg"/>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="wp-content/uploads/2018/02/html.png" alt="First slide">
    <div class="carousel-caption d-none d-md-block">
    <h5>Intégration</h5>
    <p><?php the_field('integration_p'); ?></p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="wp-content/uploads/2018/02/integration.png" alt="Second slide">
    <div class="carousel-caption d-none d-md-block">
    <h5>Programmation</h5>
    <p><?php the_field('programmation_p'); ?></p>
    </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="wp-content/uploads/2018/02/video.png" alt="Third slide">
    <div class="carousel-caption d-none d-md-block">
    <h5>Montage vidéo</h5>
    <p><?php the_field('videos_p'); ?></p>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </section>


    <section id="h_creations" class="h_projects_area">
      <h2>Quelques projets réalisés pas nos étudiants</h2>
      
<div id="h_projects_area__btn-group" class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary area" data-name="integration">Intégration</button>
  <button type="button" class="btn btn-secondary area" data-name="programmation">Programmation</button>
  <button type="button" class="btn btn-secondary area" data-name="videos">Vidéos</button>
</div>



      <div class="h_projects_area__screen">



  
      </div>


    </section>


    <!-- saving time -->
    <section> 
    </section>


 

  <!-- immersion -->
  <section id="h_immersion" class="h_immersion">
    <h2>Étudiants d'un jour et stages</h2>
    <div class="h_immersion__etudiant">
      <img alt="benoit frigon" src="<?php the_field('etudiant_img'); ?>"/>
      <h3>Étudiant d'un jour</h3>
      <p>
        <?php the_field('etudiant_p'); ?>
      </p>
      <span>Pour des renseignements <a href="mailto:ben@tim.ca">Benoit Frigon</a></span>
    </div>
    <div class="h_immersion__etudiant">
      <img alt="audrey morneau" src="<?php the_field('stage_img'); ?>"/>
      <h3>Stages</h3>
      <p>
        <?php the_field('stage_p'); ?>
      </p>
      <span>Pour des renseignements <a href="mailto:audrey@tim.ca">Audrey morneau</a></span>
    </div>
  </section>

  <!-- perspectives -->
  <section id="h_perspectives" class="h_perspectives">
    <h2>Perspectives</h2>
    <p>
      <?php the_field('perspectives_p'); ?>

    </p>

    <div class="h_perspectives__placements">
      <h3>Taux de placements</h3>

      <!-- logo percent -->
      <img alt="cercle presque complet" src="wp-content/uploads/2018/02/circle_white.png"/>



      <span><?php the_field('taux_placement'); ?></span>
    </div>
    <div class="h_perspectives__placements">
      <h3>Salaire</h3>

      <img alt="etudiant" src="wp-content/uploads/2018/02/low_student_white.png"/>


      <span><?php the_field('initial_moyen'); ?></span>
    </div>
    <div class="h_perspectives__placements">
      <h3>Salaire supérieur</h3>

      <img alt="etudiant superieur" src="wp-content/uploads/2018/02/high_student_white.png"/>

      <span><?php the_field('initial_superieur'); ?></span>
    </div>


    <h2>Exemples d'offre d'emploi</h2>


    <div class="h_perspectives__emplois">
      <!-- <h3>JOB TITLE</h3> -->


      <?php get_sidebar('sidebar-1' ); ?>
      <!-- <?php dynamic_sidebar('twitter'); ?> -->




      <!-- <p>JOB TEXTE</p> -->
    </div>




  </section>

  <!-- temoignages -->
  <section id="h_temoignages" class="h_temoignages">

    <h2>Témoignages</h2>

    <div class="h_immersion__etudiant">
      <img alt="temoignage" src="<?php the_field('temoignage_1_img'); ?>"/>
      <h3><?php the_field('temoignage_1_job'); ?></h3>
      <p><?php the_field('temoignage_1_description'); ?></p>
    </div>

    <div class="h_immersion__etudiant">
      <img alt="temoignage" src="<?php the_field('temoignage_2_img'); ?>"/>
      <h3><?php the_field('temoignage_2_job'); ?></h3>
      <p><?php the_field('temoignage_2_description'); ?></p>
    </div>



  </section>

  <!-- technique -->
  <section class="h_technique">
    <div>

    </div>
    <video width="1400" height="737" autoplay="autoplay" loop="loop">
      <source src="wp-content/uploads/2018/02/videotimcsffinal.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <h2>S'inscrire au programme</h2>

    <a class="h_technique__a" href="https://www.sracq.qc.ca/">Je m'inscris</a>

  </section>


  <!-- reseaux sociaux -->
  <section id="h_sociaux" class="h_sociaux">
    <h2>La Tim sur les réseaux sociaux</h2>

    <div class="h_facebook__top">
      <div>
        <hr/>
      </div>
      <div>
        <img class="sociaux_logo" src="wp-content/uploads/2018/02/facebook.png" alt="facebook logo" />
        <span class="sociaux_span--facebook">Facebook</span>
      </div>
      <div>
        <hr/>
      </div>
    </div>



    <?php echo do_shortcode('[custom-facebook-feed num=3 type=events layout=half]') ?>


    <div class="h_twitter__top">
      <div>
        <hr/>
      </div>
      <div>
        <img class="sociaux_logo" src="wp-content/uploads/2018/02/twitter.png" alt="twitter logo" />
        <span class="sociaux_span--twitter">Twitter</span>
      </div>
      <div>
        <hr/>
      </div>
    </div>
    <div class="h_twitter__down">
      <!-- tweet here -->

      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2') ) : ?>
      <?php endif; ?>
    </div>




  </section>

  <!-- contact -->
  <section id="h_contact" class="h_contact">
    <h2>Contact</h2>

    

    <div class="h_contact_form">

<h3>Joindre un membre de l'équipe</h3>
<?php

echo do_shortcode( '[contact-form-7 id="52" title="Contact form 1"]' );


    ?>



    </div>



    <div class="h_contact_map">

      <h3>Notre adresse</h3>
      <address>
        2410 chemin Sainte-Foy,</br>
        Québec
        G1V 1T3
      </address>
      <iframe id="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2731.900448001968!2d-71.28922068439772!3d46.78656597913883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb896dea093d777%3A0xf81581457f682cd6!2sC%C3%A9gep+de+Sainte-Foy!5e0!3m2!1sfr!2sca!4v1519314947674" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <h3>Coordonateur</h3>
      <img src="<?php the_field('info_img'); ?>" alt="sylvain lamoureux">

      <p>
        SYLVAIN LAMOUREUX</br>
        tel: (418) 659-6600</br>
        poste 6662

      </p>
      <p><?php the_field('info'); ?></p>

    </div>


  </section>

  

</main>




<?php get_footer(); ?>
