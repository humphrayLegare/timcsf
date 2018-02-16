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
Aliquam erat volutpat.  Nunc eleifend leo vitae magna.  In id erat non orci commodo lobortis.  Proin neque massa, cursus ut, gravida ut, lobortis eget, lacus.  


      </p>
      <button type="button">Projets</button>
    </div>

    <div class="h_creations_projet">
      <img alt="librairie traces" src="wp-content/uploads/2018/02/prj549_01.jpg"/>
      <h3>Vidéos</h3>
      <p>
Aliquam erat volutpat.  Nunc eleifend leo vitae magna.  In id erat non orci commodo lobortis.  Proin neque massa, cursus ut, gravida ut, lobortis eget, lacus.  
    

      </p>
      <button type="button">Projets</button>
    </div>







  </section>

  <!-- immersion -->
  <section class="h_immersion">
    <h2>Étudiants d'un jour et stages</h2>
    <div class="h_immersion__etudiant">
      <img alt="benoit frigon" src="#"/>
      <h3>Étudiant d'un jour</h3>
      <p>In id erat non orci commodo lobortis. In id erat non orci commodo lobortis
      In id erat non orci commodo lobortis.</p>
      <span>Pour des renseignements <a href="mailto:ben@tim.ca">Benoit Frigon</a></span>
    </div>
    <div class="h_immersion__etudiant">
      <img alt="audrey morneau" src="aaaa"/>
      <h3>Stages</h3>
      <p>In id erat non orci commodo lobortis. In id erat non orci commodo lobortis
      In id erat non orci commodo lobortis.</p>
      <span>Pour des renseignements <a href="mailto:audrey@tim.ca">Audrey morneau</a></span>
    </div>
  </section>

  <!-- perspectives -->
  <section class="h_perspectives">
    <h2>Perspectives</h2>
    <p>
Nullam eu ante vel est convallis dignissim. Fusce suscipit, wisi nec facilisis
facilisis, est dui fermentum leo, quis tempor ligula erat quis odio. Nunc porta
vulputate tellus. Nunc rutrum turpis sed pede. Sed bibendum. Aliquam posuere.
Nunc aliquet, augue nec adipiscing interdum, lacus tellus malesuada massa, quis
varius mi purus non odio. Pell

    </p>
    
    <div class="h_perspectives__placements">
      <h3>Taux de placements</h3>
      <i></i>
      <span>94%</span>
    </div>
    <div class="h_perspectives__placements">
      <h3>Salaire</h3>
      <i></i>
      <span>20.00$</span>
    </div>
    <div class="h_perspectives__placements">
      <h3>Salaire haut</h3>
      <i></i>
      <span>25.00$</span>
    </div>
    

    <h2>Exemples d'offre d'emploi</h2>

    
      <div class="h_perspectives__emplois">
        <!-- <h3>JOB TITLE</h3> -->


        <?php get_sidebar('sidebar-1'); ?>




        <!-- <p>JOB TEXTE</p> -->
      </div>
   



  </section>

  <!-- temoignages -->
  <section class="h_temoignages">

    <h2>Témoignages</h2>
    <div class="h_immersion__etudiant">
      <img alt="benoit frigon" src="#"/>
      <h3>Étudiant d'un jour</h3>
      <p>In id erat non orci commodo lobortis. In id erat non orci commodo lobortis
      In id erat non orci commodo lobortis.</p>
      <span>Pour des renseignements <a href="mailto:ben@tim.ca">Benoit Frigon</a></span>
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
    <div class="h_facebook__down">
      
    </div>


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
      
    </div>

    


  </section>

  <!-- contact -->
  <section class="h_contact">
    <div class="h_contact_form">
      FORM !
    </div>

    <div class="h_contact_map">
      MAP !
    </div>


  </section>

</main>




<?php //get_footer(); ?>
