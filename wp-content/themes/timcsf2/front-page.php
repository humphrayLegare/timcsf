<?php get_header(); ?>

<main class="h_main grid">
<?php if( !function_exists('get_field'))  return; ?>

  <!-- creations -->
  <section class="h_creations">
    <h2>Ce que nous créons</h2>
    <div class="h_creations_projet">
      <img alt="librairie traces" src="wp-content/uploads/2018/02/prj549_01.jpg"/>
      <h3>Intégration</h3>
      
      
      <p><?php the_field('integration_p'); ?></p>
      
      <button type="button">Projets</button>
    </div>


    <div class="h_creations_projet">
      <img alt="librairie traces" src="wp-content/uploads/2018/02/prj549_01.jpg"/>
      <h3>Programmation</h3>
      <p>
    <?php the_field('programmation_p'); ?>
      </p>
      <button type="button">Projets</button>
    </div>

    <div class="h_creations_projet">
      <img alt="librairie traces" src="wp-content/uploads/2018/02/prj549_01.jpg"/>
      <h3>Vidéos</h3>
      <p>
<?php the_field('videos_p'); ?>

      </p>
      <button type="button">Projets</button>
    </div>







  </section>

  <!-- immersion -->
  <section class="h_immersion">
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
  <section class="h_perspectives">
    <h2>Perspectives</h2>
    <p>
<?php the_field('perspectives_p'); ?>

    </p>
    
    <div class="h_perspectives__placements">
      <h3>Taux de placements</h3>
      <i></i>
      <span><?php the_field('taux_placement'); ?></span>
    </div>
    <div class="h_perspectives__placements">
      <h3>Salaire</h3>
      <i></i>
      <span><?php the_field('initial_moyen'); ?></span>
    </div>
    <div class="h_perspectives__placements">
      <h3>Salaire haut</h3>
      <i></i>
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
  <section class="h_temoignages">

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
    <h2>Sinscrire au programme</h2>
    <p></p>
    <a class="h_technique__a" href="#">Je m'inscris</a>

  </section>


  <!-- reseaux sociaux -->
  <section class="h_sociaux">
    <h2>La Tim sur les réseaux sociaux</h2>
    
    


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
  <section class="h_contact">
    <div class="h_contact_form">

      <label for="nom"><?php the_field('nom'); ?></label>
      <input id="nom" name="nom" type="text" value=""/>

      <label for="email"><?php the_field('email'); ?></label>
      <input id="email" name="email" type="text" value=""/>

      <label for="destinataire"><?php the_field('destinataire'); ?></label>
      <select id="destinataire" name="destinataire">
        <option value="">Sylvain Lamoureux</option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
      </select>

      <label for="sujet"><?php the_field('sujet'); ?></label>
      <input id="sujet" name="sujet" type="text" value="">

      <label for="message"><?php the_field('message'); ?></label>
      <textarea id="message" name="message" value="" rows="10" cols="10"></textarea>


    </div>

    <div class="h_contact_map">

      <address>
        
      </address>
      <p><?php the_field('info'); ?></p>
      
    </div>


  </section>

</main>




<?php //get_footer(); ?>
