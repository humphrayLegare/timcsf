<?php get_header(); ?>

<main class="h_main grid">
<?php if( !function_exists('get_field'))  return; ?>

  <!-- creations -->

  <section id="h_creations" class="h_creations">
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
      <h3>Salaire haut</h3>

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
        <h2>Sinscrire au programme</h2>

        <a class="h_technique__a" href="#">Je m'inscris</a>
      
  </section>
 

  <!-- reseaux sociaux -->
  <section id="h_sociaux" class="h_sociaux">
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
  <section id="h_contact" class="h_contact">
    <h2>Contact</h2>

    <div class="h_contact_form">
      
      <h3>Joindre un membre de l'équipe</h3>

      <label for="nom"><?php the_field('nom'); ?></label>
      <input id="nom" name="nom" type="text" value=""/>

      <label for="email"><?php the_field('email'); ?></label>
      <input id="email" name="email" type="text" value=""/>
      <span>exemple: john@exemple.com</span>

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

        <h3>Notre adresse</h3>
      <address>
          2410 chemin Sainte-Foy,</br>
          Québec
          G1V 1T3
      </address>
      <iframe id="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2731.900448001968!2d-71.28922068439772!3d46.78656597913883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb896dea093d777%3A0xf81581457f682cd6!2sC%C3%A9gep+de+Sainte-Foy!5e0!3m2!1sfr!2sca!4v1519314947674" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <img src="<?php the_field('info_img'); ?>" alt="sylvain lamoureux">
        <p>
          Coordonnateur</br>
    SYLVAIN LAMOUREUX</br>
    tel: (418) 659-6600</br>
    poste 6662

        </p>
      <p><?php the_field('info'); ?></p>
      
    </div>


  </section>

    <footer> tous droits reserves</footer>

</main>




<?php //get_footer(); ?>
