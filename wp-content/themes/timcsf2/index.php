<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timcsf
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="projets">
        <h2>Ce que nous créons</h2>
        <div class="projets_div">
          <img alt="broken" src="wp-content/uploads/2018/02/prj549_01.jpg"/>
          <h3>Intégration</h3>
          <p>
            blabla
          </p>
          <button type="button">Projets</button>
        </div>


      </div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
