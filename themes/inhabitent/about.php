<?php
/**
 * The template for displaying about template.
 *
 * @package RED_Starter_Theme
 * Template Name: About Template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  	<?php while ( have_posts() ) : the_post(); ?>


        	<header class="about-header">
        		  <h2><?php the_title(); ?><h2>
        	</header><!-- .entry-header -->

          <div class="about-page container">

               <h2>Our Story</h2>
              <?php  echo CFS()->get( 'our_story' ); ?>

              <h2>Our Team</h2>
                <?php  echo CFS()->get( 'our_team' ); ?>



        <?php endwhile;  ?>

        	</div><!-- .entry-content -->




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
